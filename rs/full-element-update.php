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

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "RS_PROPS_IMPORT_START","MODULE_ID" => "iblock","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа
$ELEMENT_SENDERPRD_CODE = 1566988;//htmlspecialcharsbx($_REQUEST['senderCode']);//

//Работа с файлом PRODAT
$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$xmlfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0];
$reader = new XMLReader();
$reader->open($xmlfile);
unset($xmlfile,$arUnzipFiles);

//Достаем существующие элементы
$arProductsInCatalog = array();
$arcSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_SenderPrdCode");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arcFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "PROPERTY_SENDERPRDCODE" => $ELEMENT_SENDERPRD_CODE);
$resc = CIBlockElement::GetList(Array(), $arcFilter, false, Array("nPageSize"=>1), $arcSelect);
while($obc = $resc->GetNextElement()){ 
	$areFields = $obc->GetFields();
	if($areFields['PROPERTY_SENDERPRDCODE_VALUE'] != '' && $areFields['PROPERTY_DATE_UPDATE_ETIM_PROPS_VALUE'] == '') {
		$senderCode = $areFields['PROPERTY_SENDERPRDCODE_VALUE'];
		$arProductsInCatalog[$senderCode]['ID'] = $areFields['ID'];
		unset($senderCode);
	}
	unset($areFields,$senderCode);
}
unset($arcSelect,$obc,$resc,$arcFilter);
//echo '<pre>'.print_r($arProductsInCatalog,true).'</pre>';

$i = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
		$arElement = new SimpleXMLElement($reader->readOuterXml());

		$senderCode = strval($arElement->SenderPrdCode);

			if(isset($arProductsInCatalog[$senderCode])) {//если товар есть в инфоблоке

				$el = new CIBlockElement;
				$elementId = $arProductsInCatalog[$senderCode]['ID'];

				//обновление свойств
				$PROP = array();
				$regexForNullInStart = '/^\.\d/';
				
				//свойства FeatureETIM
				foreach($arElement->FeatureETIMDetails->FeatureETIM as $property) {
					$propertyCode = $property->FeatureCode->__toString();
					$propertyValue = $property->FeatureValue->__toString();
					if( preg_match($regexForNullInStart, $propertyValue) ) {
						$propertyValue = '0'.$propertyValue;
					}
					$PROP[$propertyCode] = $propertyValue;
					if($property->FeatureUom) {
						$PROP[$propertyCode] .= ' '.$property->FeatureUom->__toString();
					}
					unset($propertyCode,$propertyValue);
				}
		
				//остальные свойства
				if($arElement->SenderPrdCode){
						$PROP['SenderPrdCode'] = $arElement->SenderPrdCode;
				}
				if($arElement->ReceiverPrdCode) {
						$PROP['ReceiverPrdCode'] = $arElement->ReceiverPrdCode;
				}
				if($arElement->ProductName) {
						$PROP['ProductName'] = $arElement->ProductName;
				}
				if($arElement->ProductStatus) {
						$PROP['ProductStatus'] = $arElement->ProductStatus;
				}
				if($arElement->UOM) {
						$PROP['UOM'] = $arElement->UOM;
				}		
				if($arElement->ItemsPerUnit) {
						$PROP['ItemsPerUnit'] = $arElement->ItemsPerUnit;
				}		
				if($arElement->Multiplicity) {
						$PROP['Multiplicity'] = $arElement->Multiplicity;
				}		
				if($arElement->ParentProdGroup) {
						$PROP['ParentProdGroup'] = $arElement->ParentProdGroup;
				}			
				if($arElement->ProductGroup) {
						$PROP['ProductGroup'] = $arElement->ProductGroup;
				}		
				if($arElement->VendorProdNum) {
						$PROP['VendorProdNum'] = $arElement->VendorProdNum;
				}		
				if($arElement->Brand) {
						$PROP['Brand'] = $arElement->Brand;
				}		
				if($arElement->Dimension->Depth) {
						$PROP['Depth'] = $arElement->Dimension->Depth;
				}
				if($arElement->Dimension->Width) {
						$PROP['Width'] = $arElement->Dimension->Width;
				}		
				if($arElement->Dimension->Height) {
						$PROP['Height'] = $arElement->Dimension->Height;
				}			
				if($arElement->Dimension->DimensionUnit) {
						$PROP['DimensionUnit'] = $arElement->Dimension->DimensionUnit;
				}			
				if($arElement->CertificateNum) {
						$PROP['CertificateNum'] = $arElement->CertificateNum;
				}

				//EAN
				if($arElement->EAN->Value) {
					$i = 0;
					foreach($arElement->EAN->Value as $value) {
						$PROP['EAN'][$i] = $value;
						$i++;
					}
					unset($i);	
				}
		
				//RelatedProd
				if($arElement->RelatedProd->ItemCode) {
					$i = 0;
					foreach($arElement->RelatedProd->ItemCode as $value) {
						$PROP['RelatedProd'][$i] = $value;
						$i++;
					}
					unset($i);
				}
		
				//Analog
				if($arElement->Analog->ItemCode) {
					$i = 0;
					foreach($arElement->Analog->ItemCode as $value) {
						$PROP['Analog'][$i] = $value;
						$i++;
					}
					unset($i);	
				}
		
				$PROP['PROVIDER'] = 'РС';

				//обновление картинок
				$PROPERTY_CODE = 'MORE_PHOTO';
				CIBlockElement::SetPropertyValuesEx($elementId, $IBLOCK_ID, array($PROPERTY_CODE => Array ("VALUE" => array("del" => "Y"))));
		
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
							$MORE_PHOTO[$key]['VALUE'] = CFile::MakeFileArray($fileSrc);
							$MORE_PHOTO[$key]['DESCRIPTION'] = '';
						}
						$j++;
					}
					CIBlockElement::SetPropertyValues ( $elementId, $IBLOCK_ID, $MORE_PHOTO, $PROPERTY_CODE ); 
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
				  "IBLOCK_ID"      => $IBLOCK_ID,
				  "DETAIL_PICTURE" => $previewPicture,
				  "PREVIEW_PICTURE" => $previewPicture,
				  "NAME" => $arElement->ProductName,
				  "PROPERTY_VALUES"=> $PROP,
				);

				$el->Update($elementId, $arLoadProductArray);

				//обновление сертификатов
				$PROPERTY_CODE = 'Certificate';
				CIBlockElement::SetPropertyValuesEx($elementId, $iblockId, array($PROPERTY_CODE => Array ("VALUE" => array("del" => "Y"))));
				$arFile = [];
				//подгрузка сертификатов
				if(count($arElement->Certificate->Value) > 0) {
					if(count($arElement->Certificate->Value) > 1) {
						$i = 0;
						foreach($arElement->Certificate->Value as $key => $fileSrc) {
							//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPDATE_RS_CERTS","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => $fileSrc));
							$fileSrc = str_replace(' ', '%20', $fileSrc);
							$arFile[$i]['VALUE'] = CFile::MakeFileArray($fileSrc);
							$arFile[$i]['DESCRIPTION'] = '';
							//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "CERT","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => $fileSrc));
							unset($fileSrc);
							$i++;
						}
					} else {
						//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "UPDATE_RS_CERTS","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => $arElement->Certificate->Value));
						$fileSrc = str_replace(' ', '%20', $arElement->Certificate->Value);
						$arFile[0]['VALUE'] = CFile::MakeFileArray($fileSrc);
					}
					//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "CERTAR","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => print_r($arFile,true)));
					CIBlockElement::SetPropertyValueCode($elementId, $PROPERTY_CODE, $arFile);
				}

				//обновление веса и габаритов
				$arFieldsQuantiy = array(
				  'ID'=> $elementId,
				  'WIDTH' => IntegrationRS::setValueInMillimeters($arElement->Dimension->Width,$arElement->Dimension->DimensionUnit),
				  'HEIGHT' => IntegrationRS::setValueInMillimeters($arElement->Dimension->Height,$arElement->Dimension->DimensionUnit),
				  'LENGTH' => IntegrationRS::setValueInMillimeters($arElement->Dimension->Depth,$arElement->Dimension->DimensionUnit),
				  'WEIGHT' => IntegrationRS::setValueInGrammes($arElement->Weight->Value,$arElement->Weight->WeightUnit),
				);
		
				if(CCatalogProduct::GetByID($elementId)) {
					CCatalogProduct::Update($elementId, $arFieldsQuantiy);
				} else {
					CCatalogProduct::Add($arFieldsQuantiy);
				}

				CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "FULL_ELEMENT_UPDATE","MODULE_ID" => "iblock","ITEM_ID" => $elementId,"DESCRIPTION" => "Элемент полностью обновлен"));

			}

    }
}



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");