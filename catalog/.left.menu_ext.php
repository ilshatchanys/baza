<?
/*if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$aMenuLinksExt = array();

if($arMenuParametrs = CMax::GetDirMenuParametrs(__DIR__))
{
	$iblock_id = \Bitrix\Main\Config\Option::get('aspro.max', 'CATALOG_IBLOCK_ID', CMaxCache::$arIBlocks[SITE_ID]['aspro_max_catalog']['aspro_max_catalog'][0]);
	$arExtParams = array(
		'IBLOCK_ID' => $iblock_id,
		'MENU_PARAMS' => $arMenuParametrs,
		'SECTION_FILTER' => array(),	// custom filter for sections (through array_merge)
		'SECTION_SELECT' => array(),	// custom select for sections (through array_merge)
		'ELEMENT_FILTER' => array(),	// custom filter for elements (through array_merge)
		'ELEMENT_SELECT' => array(),	// custom select for elements (through array_merge)
		'MENU_TYPE' => 'catalog',
	);
	CMax::getMenuChildsExt($arExtParams, $aMenuLinksExt);
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
*/

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "",
	"SECTION_PAGE_URL" => "/r-#SECTION_CODE#.html",
	"DETAIL_PAGE_URL" => "/d-#ELEMENT_CODE#.html",
	"IBLOCK_TYPE" => "aspro_max_catalog",
	"IBLOCK_ID" => "52",
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>