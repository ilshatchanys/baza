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

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$get = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0], true);
$arProdat = simplexml_load_string($get);

//Собираем все существующие свойства ИБ
$properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("IBLOCK_ID"=>$IBLOCK_ID));
$arExistedProperties = array();
while ($fields = $properties->GetNext())
{
	$code = $fields["CODE"];
	$name = $fields["NAME"];
	$arExistedProperties[$code] = $name;
}
unset($code,$name,$fields,$properties);
//echo '<pre>'.print_r($arExistedProperties,true).'</pre>';

//Собираем все прилетевшие свойства из файла и добавляем в существующие новые
$arImportedProperties = array();
if($arProdat->DocDetail) {

	foreach($arProdat->DocDetail as $product) {
		foreach($product->FeatureETIMDetails->FeatureETIM as $property) {
			$code = $property->FeatureCode->__toString();
			$name = $property->FeatureName->__toString();
			$arImportedProperties[$code] = $name;
			if($property->FeatureUom != '') {
				$arImportedProperties[$code] .= ', '.$property->FeatureUom->__toString();
			}
		}

	}

}
unset($code,$name,$arProdat);
//echo '<pre>'.print_r($arImportedProperties,true).'</pre>';

$arUniqueImportedProperties = array();
foreach ($arImportedProperties as $key => $name) {
  if (isset($arUniqueImportedProperties[$key])) {
    // found duplicate
    continue;
  }
  // remember unique item
  $arUniqueImportedProperties[$key] = $name;
}

//$arUniqueImportedProperties = array_unique($arImportedProperties);
unset($arImportedProperties);
//echo '<pre>'.print_r($arUniqueImportedProperties,true).'</pre>';

//Узнаем какие новые есть свойства
$arNewProperties = array_diff_key($arUniqueImportedProperties,$arExistedProperties);
//echo '<pre>'.print_r($arNewProperties,true).'</pre>';

//создать свойства инфоблока
$i = 1;
foreach($arNewProperties as $code => $name) {

	$arFields = Array(
		"NAME" => $name,
		"ACTIVE" => "Y",
		"SORT" => $i*100000,
		"CODE" => $code,
		"PROPERTY_TYPE" => "S",
		"MULTIPLE" => "N",
		"IBLOCK_ID" => $IBLOCK_ID //инфоблок
	);
	echo 'Свойство '.$code.' '.$name.' создано<br>';

	$ibp = new CIBlockProperty;
	$PropID = $ibp->Add($arFields);
	$i++;

}
unset($i);

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "ETIM_NEW_PROPS_READY","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Свойства ETIM обновлены"));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 