#!/usr/bin/php -q
<?php 
$_SERVER["DOCUMENT_ROOT"] = "/home/k/ksgrupp/ksgrupp.beget.tech/public_html"; 
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

$siteID = 's1'; // replace #SITE_ID# to your real site ID - need for language ID

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS",true);
define("BX_CAT_CRON", true);
define('NO_AGENT_CHECK', true);
if (preg_match('/^[a-z0-9_]{2}$/i', $siteID) === 1)
{
	define('SITE_ID', $siteID);
}
else
{
	die('No defined site - $siteID');
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 

ini_set('memory_limit', '-1');
set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/IntegrationRS.php")) {
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/IntegrationRS.php");
}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_SECTIONS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$get = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0], true);
$arProdat = simplexml_load_string($get);
unset($get,$arUnzipFiles);

//Достаем существующие разделы
$arExistedSections = array();
$arFilter = array('IBLOCK_ID' => $IBLOCK_ID);
$arSelect = array("IBLOCK_SECTION_ID", "ID", "UF_ETIM", "CODE", "DEPTH_LEVEL");
$rsSections = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter, false, $arSelect);
while ($arSection = $rsSections->Fetch())
{
	$code = $arSection['UF_ETIM'];
	if($arSection['DEPTH_LEVEL'] == 1) {
		$arExistedSections['LEVEL_1'][$code] = $arSection;
	}
	if($arSection['DEPTH_LEVEL'] == 2) {
		$arExistedSections['LEVEL_2'][$code] = $arSection;
	}
}
unset($code,$rsSections,$arSection,$arFilter);
//echo '<pre>'.print_r($arExistedSections,true).'</pre>';

//Достаем разделы из импорта
$arImportedSections = array();
if($arProdat->DocDetail) {

	foreach($arProdat->DocDetail as $product) {

		$parentGroupCode = $product->ParentProdCode->__toString();
		$parentGroupName = $product->ParentProdGroup->__toString();
		$groupCode = $product->ProductCode->__toString();
		$groupName = $product->ProductGroup->__toString();

		$arImportedSections['LEVEL_1'][$parentGroupCode] = $parentGroupName;
		$arImportedSections['LEVEL_2'][$groupCode] = array('NAME' => $groupName, 'PARENT_CODE' => $parentGroupCode);

		unset($parentGroupCode,$parentGroupName,$groupCode,$groupName);

	}

}
unset($arProdat);
//echo '<pre>'.print_r($arImportedSections,true).'</pre>';

//считаем общее кол-во разделов
$importSectionsCount = 0;
foreach($arImportedSections['LEVEL_1'] as $section) { 
	$importSectionsCount++; 
}
foreach($arImportedSections['LEVEL_2'] as $section) { 
	$importSectionsCount++; 
}

//Узнаем новые разделы 1 уровня
if($arExistedSections['LEVEL_1']) {
	$arNewFirstLevelSections = array_diff_key($arImportedSections['LEVEL_1'],$arExistedSections['LEVEL_1']);
} else {
	$arNewFirstLevelSections = $arImportedSections['LEVEL_1'];
}
//echo '<pre>'.print_r($arNewFirstLevelSections,true).'</pre>';
//Узнаем новые разделы 2 уровня
if($arExistedSections['LEVEL_2']) {
	$arNewSecondLevelSections = array_diff_key($arImportedSections['LEVEL_2'],$arExistedSections['LEVEL_2']);
} else {
	$arNewSecondLevelSections = $arImportedSections['LEVEL_2'];
}
//echo '<pre>'.print_r($arNewSecondLevelSections,true).'</pre>';

unset($arExistedSections);

//Импортируем разделы новые первого уровня
if($arNewFirstLevelSections) {

	foreach($arNewFirstLevelSections as $code => $name) {
		$ciblocksection = new CIBlockSection;
		$ciblocksectionFields = Array(
		  "ACTIVE" => "Y",
		  "IBLOCK_ID" => $IBLOCK_ID,
		  "NAME" => $name,
		  "CODE" => IntegrationRS::slugify($name), //string
		  "SORT" => "100",
		  "UF_ETIM" => $code,
		);

		if( $categorySectionId = $ciblocksection->Add($ciblocksectionFields) ) {
		
			echo 'Создана категория 1 уровня '.$name.' с ID '.$categorySectionId.'<br>';
		
		}
	}

}
unset($ciblocksection,$ciblocksectionFields,$categorySectionId);

//Узнаем заново разделы первого уровня для подвязки новых разделов второго уровня
$arExistedFirstLevelSections = array();
$arFilter = array('IBLOCK_ID' => $IBLOCK_ID);
$arSelect = array("IBLOCK_SECTION_ID", "ID", "UF_ETIM", "CODE", "DEPTH_LEVEL");
$rsSections = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter, false, $arSelect);
while ($arSection = $rsSections->Fetch())
{
	if($arSection['DEPTH_LEVEL'] == 1) {
		$arExistedFirstLevelSections[] = $arSection;
	}
}
unset($rsSections,$arSection,$arFilter);

//Импортируем разделы новые второго уровня
if($arNewSecondLevelSections) {

	foreach($arNewSecondLevelSections as $code => $section) {

		$parentId = IntegrationRS::getSectionIdByParentCode($section['PARENT_CODE'], $arExistedFirstLevelSections);
		$ciblocksection = new CIBlockSection;
		$ciblocksectionFields = Array(
		  "ACTIVE" => "Y",
		  "IBLOCK_ID" => $IBLOCK_ID,
		  "NAME" => $section["NAME"],
		  "CODE" => IntegrationRS::slugify($section["NAME"]), //string
		  "IBLOCK_SECTION_ID" => $parentId,
		  "SORT" => "100",
		  "UF_ETIM" => $code,
		);

		if( $categorySectionId = $ciblocksection->Add($ciblocksectionFields) ) {

			echo 'Создана категория 2 уровня '.$section['NAME'].' с ID '.$categorySectionId.'<br>';

		}

		unset($parentId);
	}

}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_SECTIONS_IMPORT_END","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Выгрузка разделов завершена. Всего: ".$importSectionsCount." разделов в конкретной выгрузке."));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 