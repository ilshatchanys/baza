<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent(
	"aspro:vk.max",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => $arParams['COMPOSITE_FRAME_MODE'],
		"COMPOSITE_FRAME_TYPE" => $arParams['COMPOSITE_FRAME_TYPE'],
		"API_TOKEN_VK" => $arParams['API_TOKEN_VK'],
		"GROUP_ID_VK" => $arParams['GROUP_ID_VK'],
		"TITLE" => $arParams['VK_TITLE_BLOCK'],
		"SHOW_TITLE" => $arParams["SHOW_TITLE"],
		"RIGHT_TITLE" => $arParams['VK_TITLE_ALL_BLOCK'],
		"ELEMENTS_ROW" => $arParams['LINE_ELEMENT_COUNT'],
		"VK_TEXT_LENGTH" => $arParams['VK_TEXT_LENGTH'],
		"BORDERED" => $arParams['BORDERED'],
		"NO_MARGIN" => $arParams['NO_MARGIN'],
		"VIEW_TYPE" => $arParams['VIEW_TYPE'],
		"LINE_ELEMENT_COUNT" => $arParams['LINE_ELEMENT_COUNT'],
		"PAGE_ELEMENT_COUNT" => $arParams['PAGE_ELEMENT_COUNT'],
		"INCLUDE_FILE" => $arParams['INCLUDE_FILE'],
		"WIDE_BLOCK" => $arParams['WIDE_BLOCK'],
		"WIDE_FIRST_BLOCK" => $arParams['WIDE_FIRST_BLOCK'],
		"CACHE_TYPE" => $arParams['CACHE_TYPE'],
		"CACHE_TIME" => $arParams['CACHE_TIME'],
		"CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
	)
);?>