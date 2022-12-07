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

CModule::IncludeModule("iblock");
$IBLOCK_ID = 52;//инфоблок с товарами
$ADMIN_ID = 1;//ID админа
$date = date('d.m.Y');
$arParams = array("replace_space"=>"-","replace_other"=>"-");
$bs = new CIBlockSection;

$arFilter = array('IBLOCK_ID' => $IBLOCK_ID);
$rsSections = CIBlockSection::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter);
while ($arSection = $rsSections->Fetch())
{
	$arFields = Array(
		"CODE" => Cutil::translit($arSection['NAME'], "ru", $arParams)
	);
	
	$bs->Update($arSection['ID'], $arFields);
	unset($arFields);
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");