<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	define("STATISTIC_SKIP_ACTIVITY_CHECK", true);
	define('NOT_CHECK_FILE_PERMISSIONS', true);
	define('PUBLIC_AJAX_MODE', true);
	define('NO_KEEP_STATISTIC', 'Y');
	define('STOP_STATISTICS', true);
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
}?>
<?$APPLICATION->IncludeComponent(
	"aspro:wrapper.block.max",
	"brands_by_group",
	Array(
		"AJAX_PATH" => str_replace(\Bitrix\Main\Application::getDocumentRoot(), '', __FILE__),
		"LETTERS" => $arFilterLetters,
		"LETTER" => $letterRequest,
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"SHOW_AJAX_HEAD" => "N"
	)
);?>