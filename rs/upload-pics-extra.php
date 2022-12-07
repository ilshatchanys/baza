#!/usr/bin/php -q
<?php
$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/..");
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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_PICS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

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
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_MORE_PHOTO" => false);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		unset($senderCode);
	}
	unset($areFields,$senderCode);
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_PICS_RS_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Загрузка изображений. СТАРТ"));

//Работаем над добавлением новых
$date = date('d.m.Y');
$i = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$product = new SimpleXMLElement($reader->readOuterXml());

			$senderCode = strval($product->SenderPrdCode);
			$productId = $arProductsInCatalog[$senderCode]['ID'];
			$hasPics = ($product->Image->Value) ? 'Y' : 'N';//
			if(isset($arProductsInCatalog[$senderCode]) && $hasPics == 'Y') {//если товар есть в инфоблоке

				//$productUpdateDate = IntegrationRS::getProductUpdatePicsDate($product->SenderPrdCode, $arProductsInCatalog);
				//if($productUpdateDate != $date/*$product->SenderPrdCode == '404748'*/) {//прогружаем свойства только если они еще не добавлялись
					//echo '<pre>'.print_r($product,true).'</pre>';
					updateProductPicsExtra($productId, $product, $IBLOCK_ID, $ADMIN_ID, $date);
					//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_PICS_RS_EVERY_1","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Проверить элемент: ".$productId));
					$i++;
					if($i % 500 == 0) {
						CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_PICS_RS_EVERY_500","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Загружены изображения у 500 товаров. Текущий счетчик: ".$i));
					}
				//}

			}

    }
}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPLOAD_PICS_RS","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => "Загружены изображения. Всего товаров: ".$i));

function updateProductPicsExtra($elementId, $arElement, $iblockId, $adminId, $date) {

	CModule::IncludeModule('iblock');
	$PROPERTY_CODE = 'MORE_PHOTO';
	CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, array($PROPERTY_CODE => Array ("VALUE" => array("del" => "Y"))));

	//подгрузка изображений
	if(count($arElement->Image->Value) > 1) {
		$MORE_PHOTO = array();
		$j = 0;
		foreach($arElement->Image->Value as $key => $fileSrc) {
			if ($j == 0) {
				$previewPicture = CFile::MakeFileArray($fileSrc);
			}
			if ($j > 0) {
				$key = $j - 1;
				$MORE_PHOTO[$j]['VALUE'] = CFile::MakeFileArray($fileSrc);
				$MORE_PHOTO[$j]['DESCRIPTION'] = '';
			}
			$j++;
		}
		//CIBlockElement::SetPropertyValueCode($elementId, $PROPERTY_CODE, Array("VALUE"=>$MORE_PHOTO)  );
		//			CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, $MORE_PHOTO);
		CIBlockElement::SetPropertyValues ( $elementId, $iblockId, $MORE_PHOTO, $PROPERTY_CODE );
		//CIBlockElement::SetPropertyValueCode($elementId, $PROPERTY_CODE, $MORE_PHOTO);
	} else {
		$previewPicture = CFile::MakeFileArray($arElement->Image->Value);
	}

	//подгрузка значения в DATE_UPDATE_PICS
	if(count($arElement->Image->Value) > 0) {
		CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, array('DATE_UPDATE_PICS' => $date));
	}

	$el = new CIBlockElement;
	$arLoadProductArray = Array(
		"MODIFIED_BY"    => $adminId,
		"IBLOCK_ID"      => $iblockId,
		//"ACTIVE"         => "Y",
		"PREVIEW_PICTURE" => $previewPicture,
		"DETAIL_PICTURE" => $previewPicture,
	);

	if($el->Update($elementId, $arLoadProductArray, false, false, true)) {
		//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPDATE_RS_PRODUCT_PICS","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => "Обновлены изображения товара"));
	} else {
		//CEventLog::Add(array("SEVERITY" => "ERROR","AUDIT_TYPE_ID" => "ERROR_UPDATE_RS_PRODUCT_PICS","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => "Ошибка при обновлении изображений элемента! ".$el->LAST_ERROR));
	}

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
