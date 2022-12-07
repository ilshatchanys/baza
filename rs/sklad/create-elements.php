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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_ELEMENTS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$xmlfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0];
$reader = new XMLReader();
$reader->open($xmlfile);
COption::SetOptionString("kitlisa.rs", "LAST_PRODAT", $arUnzipFiles[0]);
unset($xmlfile,$arUnzipFiles);

//Достаем существующие разделы
$arExistedSections = array();
$arFilter = array('IBLOCK_ID' => $IBLOCK_ID);
$arSelect = array("IBLOCK_SECTION_ID", "ID", "UF_ETIM", "CODE", "DEPTH_LEVEL");
$rsSections = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter, false, $arSelect);
while ($arSection = $rsSections->Fetch())
{
	$arExistedSections[] = $arSection;
}
unset($code,$rsSections,$arSection,$arsFilter);
//echo '<pre>'.print_r($arExistedSections,true).'</pre>';

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$arProductsInCatalog[] = $obc->GetFields();
}
unset($arcSelect,$obc,$resc,$arcFilter);

$importElementsCount = 0;
$importNewElementsCount = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$product = new SimpleXMLElement($reader->readOuterXml());

		$productId = IntegrationRS::getProductId($product->SenderPrdCode, $arProductsInCatalog);
		if($productId == false) {//если товара нет в инфоблоке

			//узнаем раздел 2 уровня к которому будем привязывать 
			$groupCode = $product->ProductCode->__toString();
			$categorySectionId = IntegrationRS::getSectionIdByParentCode($groupCode, $arExistedSections);
			//создаем новый товар
			IntegrationRS::addProduct($product, $IBLOCK_ID, $categorySectionId, $ADMIN_ID);
			CIBlockElement::SetPropertyValuesEx($productId, $IBLOCK_ID, array('FOLDER_SKLAD' => 'Y'));
			$importNewElementsCount++;

		}

		$importElementsCount++;

    }
}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_ELEMENTS_IMPORT_END","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Выгрузка элементов завершена. Всего: ".$importElementsCount." элементов в конкретной выгрузке."));

/*$arEventField = array(
	"MESSAGE" => 'Всего элементов: '.$importElementsCount.'. Новых элементов: '.$importNewElementsCount,
);

CEvent::SendImmediate('TECH', 's1', $arEventField, 'N', 84, false);*/