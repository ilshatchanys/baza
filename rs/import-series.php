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

ini_set('memory_limit', '2048M');
set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/IntegrationRS.php")) {
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/IntegrationRS.php");
}

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRICAT
$csvfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/series.csv";
$file = fopen($csvfile, 'r');

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		//unset($senderCode);
	}
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

$i = 0;//для отладки
CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "START_IMPORT_SERIES_RS_PRODUCTS","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Обновление серий. СТАРТ"));

while (($line = fgetcsv($file)) !== FALSE) {

	if($line[0] && $line[2]) {

		$senderCode = $line[0];
		if($arProductsInCatalog[$senderCode]) {//если товар есть в ИБ


			CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]['ID'], false, array('SERIES' => htmlspecialchars($line[2])));
			$i++;

		}
		unset($senderCode);

	}

}
fclose($file);

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "END_IMPORT_SERIES_RS_PRODUCTS","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Обновлены серий товаров. Всего: ".$i));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 