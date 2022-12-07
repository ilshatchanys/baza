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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_BRANDS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$IBLOCK_ID_BRAND = 56;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$xmlfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0];
$reader = new XMLReader();
$reader->open($xmlfile);
unset($xmlfile,$arUnzipFiles);

//Достаем существующие бренды
$arBrands = array();
$arcSelect = Array("ID", "NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID_BRAND);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$arFields = $obc->GetFields();
	$brandName = $arFields['NAME'];
	$arBrands[$brandName] = $arFields['ID'];
}
unset($arcSelect,$obc,$resc,$arcFilter);

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_BRANDS_RS_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Добавление брендов."));

$i = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$product = new SimpleXMLElement($reader->readOuterXml());
		$senderCode = strval($product->SenderPrdCode);
		$brandName = strval($product->Brand);

			if( isset($arBrands[$brandName]) && isset($arProductsInCatalog[$senderCode]) ) 
			{//прикрепляем товар к бренду

				CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]['ID'], false, array('BRAND' => $arBrands[$brandName]));
				CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]['ID'], false, array('Brands' => $brandName));

			} elseif ( !isset($arBrands[$brandName]) && isset($arProductsInCatalog[$senderCode]) )
			{//создаем бренд, записываем бренд в массив $arBrands, прикрепляем товар к бренду

				$el = new CIBlockElement;
				$translitParams = Array("max_len" => "100","change_case" => "L","replace_space" => "_","replace_other" => "_","delete_repeat_replace" => "true","use_google" => "false");

				$arLoadProductArray = Array(
				  "MODIFIED_BY"    => $ADMIN_ID, // 4 = admin элемент изменен текущим пользователем
				  "IBLOCK_SECTION" => false, // элемент лежит в корне раздела если string == ''
				  "IBLOCK_ID"      => $IBLOCK_ID_BRAND,
				  "NAME"           => $brandName,
				  "CODE"           => CUtil::translit($brandName, "ru" , $translitParams), //string
				  "ACTIVE"         => "Y",
				);
				
				if($BRAND_ID = $el->Add($arLoadProductArray))
				{

					$arBrands[$brandName] = $BRAND_ID;
					CIBlockElement::SetPropertyValuesEx($BRAND_ID, false, array('SHOW_ON_INDEX_PAGE' => 420));
					$i++;
					//привязываем
					CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]['ID'], false, array('BRAND' => $arBrands[$brandName]));
					CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]['ID'], false, array('Brands' => $brandName));

				}

			}

		unset($senderCode, $brandName, $BRAND_ID);

    }
}


CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_BRANDS_RS_END","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Добавлены бренды. Новых: ".$i));



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 