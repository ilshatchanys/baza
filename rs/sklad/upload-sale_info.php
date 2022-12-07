#!/usr/bin/php -q
<?php 
$_SERVER["DOCUMENT_ROOT"] = "/home/k/ksgrupp/ksgrupp.beget.tech/public_html"; 
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

$domainName = 'ksgrupp.beget.tech';
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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_SALE_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа
$VAT_ID = 2;
$VAT_INCLUDE = 'Y';

//Узнаем значения для свойства «Наличие»
$propertyInStock_enums = CIBlockPropertyEnum::GetList(Array("DEF" => "DESC", "SORT" => "ASC"), Array("IBLOCK_ID" => $IBLOCK_ID, "CODE" => "IN_STOCK"));
$arInStockValueIds = array();
while($enum_fields = $propertyInStock_enums->GetNext()) {
	switch ($enum_fields['EXTERNAL_ID']) {
		case 'N':
			$arInStockValueIds['N'] = $enum_fields['ID'];
			break;
		case 'Y':
			$arInStockValueIds['Y'] = $enum_fields['ID'];
			break;
	}
}
unset($enum_fields,$propertyInStock_enums);

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "TIMESTAMP_X", "PROPERTY_SenderPrdCode", "PROPERTY_Brands");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_PROVIDER"=>"РС");
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, false, $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$list = CIBlockSection::GetNavChain(false, $areFields['IBLOCK_SECTION_ID'], ['ID', 'NAME', 'DEPTH_LEVEL'], true);
		foreach ($list as $v) {
			$groups[] = $v['ID'];
		}
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		$arProductsInCatalog[$senderCode]['GROUPS'] = $groups;
		$arProductsInCatalog[$senderCode]['VALUES'] = $areFields;
		unset($list,$senderCode,$groups);
	}
	unset($areFields);
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

//Достаем существующие наценки
$IBLOCK_ID_EXTRA = 61;//инфоблок с наценками
$arExtra = array();
$areSelect = Array("ID", "IBLOCK_ID", "NAME", "SORT", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$areFilter = Array("IBLOCK_ID"=>$IBLOCK_ID_EXTRA, "ACTIVE"=>"Y");
$rese = CIBlockElement::GetList(Array("SORT"=>"DESC"), $areFilter, false, false, $areSelect);
while($obe = $rese->GetNextElement()){
	$areFields = $obe->GetFields();
	$areProps = $obe->GetProperties();
	$arExtra[] = array_merge($areFields,$areProps);
}
unset($areSelect,$obe,$rese,$areFilter,$areProps,$areFields);
//echo '<pre>'.print_r($arExtra,true).'</pre>';

$arMeasures = array();
if(  CModule::IncludeModule("catalog") ) {
        $res_measure = CCatalogMeasure::getList();
        while($measure = $res_measure->Fetch()) {
            $arMeasures[] = $measure;
        }        
}

$i = 0;//для отладки
$j = 0;
//Работа с файломами PRICAT
$arPricatFiles = scandir($DOCUMENT_ROOT."/upload/parse/pricat/",1);
$arProblemFiles = array();

foreach($arPricatFiles as $xmlfile) {

	if(is_file($DOCUMENT_ROOT."/upload/parse/pricat/".$xmlfile))
	{

		$zeroPrice = 0;
		$zeroQTY = 0;

		$readerCheck = new XMLReader();
		$readerCheck->open($DOCUMENT_ROOT."/upload/parse/pricat/".$xmlfile);
		while ($readerCheck->read()) {
			if($readerCheck->nodeType == XMLReader::ELEMENT && $readerCheck->name == 'DocDetail' ) {

				$product = new SimpleXMLElement($readerCheck->readOuterXml());
				$senderCode = strval($product->SenderPrdCode);
		
				if( isset($arProductsInCatalog[$senderCode]) ) {
					$arProduct['QTY'] = $product->QTY;
					if(intval($arProduct['QTY']) === 0) {
						$zeroQTY++;
					}
				}
		
				unset($senderCode,$arProduct,$product);

			}
		}

		if($zeroQTY > 9000) 
		{
			CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "TOO_MUCH_NULLED","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => "Слишком много товаров с нулевыми остатками (всего ".$zeroQTY."). Выгрузка PRICAT " . $xmlfile . " прекращена."));
			$arFileProblem['NAME'] = $xmlfile;
			$arFileProblem['ZERO_QTY'] = $zeroQTY;
			$arProblemFiles[] = $arFileProblem;
			unset($arFileProblem);
		}
		else
		{
			$reader = new XMLReader();
			$reader->open($DOCUMENT_ROOT."/upload/parse/pricat/".$xmlfile);
			if (CModule::IncludeModule("kitlisa.rs"))
			{
				COption::SetOptionString("kitlisa.rs", "LAST_PRICAT", $xmlfile);
			}
			break;
		}

		unset($readerCheck);

	}
}
unset($xmlfile,$arPricatFiles);

if(count($arProblemFiles) > 0)
{

	$message = 'Логин PRICAT: ' . COption::GetOptionString('kitlisa.rs', "PRICAT_LOGIN");
	foreach($arProblemFiles as $arFile)
	{
		$message .= 'Файл ' . $arFile['NAME'] . '. Кол-во товаров с отстатком 0:' . $arFile['ZERO_QTY'] . '. ';
	}

	$mail="info@kit-lisa.ru"; // ваша почта
	$subject ="Проблемы с выгрузкой " . $domainName; // тема письма

	if( mail($mail, $subject, $message) )
	{
		echo 'Успешно отправлено!'; }
	else {
		echo 'Отправка не удалась!';
	}
	//CEvent::SendImmediate('KIL_FEEDBACK', 's1', $arEventField, 'N', 92, false);

}

if(isset($reader))
{
	CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "START_UPDATE_CATALOG_RS_PRODUCTS","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => "Обновление торговых данных товаров. СТАРТ"));

	while ($reader->read()) {
		if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
	
			$product = new SimpleXMLElement($reader->readOuterXml());

			$senderCode = strval($product->SenderPrdCode);
	
			if( isset($arProductsInCatalog[$senderCode]) ) {
	
				$arProduct['UOM'] = IntegrationRS::getMeasure($product->UOM, $arMeasures);//единица измерения количества
				$arProduct['QTY'] = $product->QTY;//Количество товара на складах Русского Света (остатки)
				$arProduct['SumQTY'] = $product->SumQTY;
				if(intval($arProduct['SumQTY']) === 0) {
					$zeroQTY++;
				} else {
				}
				$arProduct['Brand'] = $product->Brand;
				$arProduct['Price2'] = $product->Price2;
				if(intval($arProduct['Price2']) === 0) {
					$zeroPrice++;
				}
				$arProduct['SenderPrdCode'] = $product->SenderPrdCode;
				$arProduct['RetailPrice'] = $product->RetailPrice;
				$arProduct['MRC'] = $product->MRC;
				$arProduct['RetailCurrency'] = $product->RetailCurrency;
				$arProduct['VendorProdNum'] = $product->VendorProdNum;//
				$arProduct['PartnerQTY'] = $product->SupOnhandDetail->PartnerQTY;
	
				//обновляем данные элемента
				IntegrationRS::updateProductCatalogInfo($arProductsInCatalog[$senderCode]['ID'], $arProductsInCatalog[$senderCode], $arProduct, $arExtra, $IBLOCK_ID, $ADMIN_ID, $VAT_INCLUDE, $VAT_ID);
				if(intval($arProduct['SumQTY']) === 0) {
					CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]["ID"], false, array('IN_STOCK' => $arInStockValueIds['N']));
				} else {
					CIBlockElement::SetPropertyValuesEx($arProductsInCatalog[$senderCode]["ID"], false, array('IN_STOCK' => $arInStockValueIds['Y']));
				}
				unset($arProductsInCatalog[$senderCode]);
				$i++;
	
			}
	
			unset($arProduct);
	
			$j++;
	
		}
	}
	
	CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "END_UPDATE_CATALOG_RS_PRODUCTS","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => "Обновлены торговые данные товаров. Всего: ".$i));
	
	
	//Обнуляем остатки у ставшихся товаров
	$arNulledProducts = array();
	$i = 0;
	foreach($arProductsInCatalog as $key => $product) {
	
		IntegrationRS::updateProductCatalogInfoToNull($product['ID'], $IBLOCK_ID, $ADMIN_ID, $VAT_INCLUDE, $VAT_ID);
		CIBlockElement::SetPropertyValuesEx($product["ID"], false, array('IN_STOCK' => $arInStockValueIds['N']));
		$arNulledProducts[] = $product['ID'];
		$i++;
	
	}
	CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPDATE_CATALOG_RS_PRODUCTS_TO_NULL","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => "У ".$i." обнулены остатки и цены."));
	if (CModule::IncludeModule("kitlisa.rs"))
	{
		$date = date('d.m.Y H:i:s');
		COption::SetOptionString("kitlisa.rs", "LAST_PRICAT_TIME", $date);
	}

} 
else 
{
	die();
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 