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

ini_set('memory_limit', '2048M');
set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

if( CModule::IncludeModule("iblock") )
{

	$IBLOCK_ID = 52;

	$bs = new CIBlockSection;
	$arFilter = ['IBLOCK_ID' => $IBLOCK_ID];
	$bIncCnt = ['ELEMENT_SUBSECTIONS' => 'Y', 'CNT_ACTIVE' => 'Y'];
	$rsSections = CIBlockSection::GetList(['LEFT_MARGIN' => 'ASC'], $arFilter, $bIncCnt);
	while ($arSection = $rsSections->Fetch())
	{
		//echo '<pre>' . print_r($arSection, true) . '/<pre>';
		$activeElements = CIBlockSection::GetSectionElementsCount($arSection['ID'], Array("CNT_ACTIVE"=>"Y"));
		//echo '<b>' . $activeElements . '</b>';

		if( $activeElements > 1 && $arSection['ACTIVE'] == 'N' )
		{
			//echo '<pre>' . print_r($arSection, true) . '/<pre>';
			//активируем деактивированный раздел с активными элементами
			$bs->Update($arSection['ID'], ['ACTIVE' => 'Y']);
		}
		elseif( $activeElements < 1 && $arSection['ACTIVE'] == 'Y' )
		{
			//echo '<pre>' . print_r($arSection, true) . '/<pre>';
			//деактивируем раздел с неактивными элементами
			$bs->Update($arSection['ID'], ['ACTIVE' => 'N']);
		}
	}

}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");