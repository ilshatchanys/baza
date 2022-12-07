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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_DIMENSIONS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
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
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "TIMESTAMP_X", "PROPERTY_SenderPrdCode", "PROPERTY_DATE_UPDATE_PICS");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "WEIGHT" => false);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		//unset($senderCode);
	}
	unset($areFields,$senderCode);
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

//Работаем над добавлением новых
$date = date('d.m.Y');

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_DIMENSIONS_RS_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Обновление размеров и веса товаров."));

$i = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$product = new SimpleXMLElement($reader->readOuterXml());

			$senderCode = strval($product->SenderPrdCode);
			$productId = $arProductsInCatalog[$senderCode]['ID'];

			if( isset($arProductsInCatalog[$senderCode]) ) {//если товар есть в инфоблоке

				IntegrationRS::updateProductDimensionsAndWeight($productId,$product, $IBLOCK_ID, $ADMIN_ID, $date);
				$i++;

				if($i % 500 == 0) {
					CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_DIMENSIONS_EVERY_500","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Загружены вес и размеры у 500 товаров. Текущий счетчик: ".$i));
				}

			}

    }
}


CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_DIMENSIONS_RS_END","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Обновлены размеры и вес. Всего товаров: ".$i));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 