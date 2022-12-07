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

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$arResult[] = $obc->GetFields();
	//CIBlockElement::Delete($arFields['ID']);
}

$arResult2 = $arResult;

foreach($arResult as $key => $arElement) {

	$arDoubles = array();//массив для сбора дублей

	foreach($arResult2 as $key2 => $arElement2) {
		if($arElement['NAME'] === $arElement2['NAME']) {
			$arDoubles[] = $arElement;
		}
	}

	if(count($arDoubles) > 1) {//если совпадений по имени больше 1, значит массив готов для удаления дублей
		foreach($arDoubles as $i => $duplicate) {
			if(!$duplicate['PROPERTY_SENDERPRDCODE_VALUE']) {//если у дубля нет свойства SenderPrdCode
				CIBlockElement::Delete($duplicate['ID']);
			}
		}
	}

}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");