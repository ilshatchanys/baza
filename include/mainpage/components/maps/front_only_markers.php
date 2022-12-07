<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	define("STATISTIC_SKIP_ACTIVITY_CHECK", "true");
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
}?>
<?$APPLICATION->IncludeComponent(
	"aspro:wrapper.block.max", 
	"front_map", 
	array(
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_COMPARE" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"ELEMENT_COUNT" => "30",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arRegionality",
		"FILTER_PROP_CODE" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_TYPE" => "aspro_max_content",
		"IBLOCK_ID" => "37",
		"INCLUDE_SUBSECTIONS" => "Y",
		"TITLE_BLOCK" => "Адрес склада",
		"TITLE_BLOCK_DETAIL_NAME" => "Контакты",
		"TITLE_BLOCK_ALL" => "",
		"ALL_URL" => "",
		"COMPONENT_TEMPLATE" => "front_map",
		"SECTION_ID" => "",
		"SECTION_CODE" => ""
	),
	false
);?>