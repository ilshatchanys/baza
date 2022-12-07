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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_UPDATE_NAMES_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$el = new CIBlockElement;
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$xmlfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0];
$reader = new XMLReader();
$reader->open($xmlfile);
unset($xmlfile,$arUnzipFiles);

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_PROVIDER"=>"РС");
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		$arProductsInCatalog[$senderCode]['NAME'] = $areFields['NAME'];
		unset($senderCode);
	}
	unset($areFields);
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

$i = 0;
while ($reader->read()) {
	if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$product = new SimpleXMLElement($reader->readOuterXml());

		$senderCode = strval($product->SenderPrdCode);
		$productName = strval($product->ProductName);

		if ( isset($arProductsInCatalog[$senderCode]) && $arProductsInCatalog[$senderCode]['NAME'] != $productName )
		{
			$arLoadProductArray = Array(
				"MODIFIED_BY"    => $ADMIN_ID, // элемент изменен текущим пользователем
				"NAME"           => $productName,
			);

			if ($el->Update($arProductsInCatalog[$senderCode]['ID'], $arLoadProductArray))
			{
				$i++;
			}
		}
		unset($senderCode);
	}
}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_UPDATE_NAMES_END","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Всего обновлено наименований: " . $i ));

include $DOCUMENT_ROOT.'/rs/refacet.php';
include $DOCUMENT_ROOT.'/rs/reindex.php';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 