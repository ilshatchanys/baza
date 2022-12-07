#!/usr/bin/php -q
<?php
$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/..");
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
$siteID = 's1';
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

if (!CModule::IncludeModule('search')) {
   die('Search module not included');
}

$time_start = time();

$progress = array();
$max_execution_time = 10000; // все элементы индексируются только при большом шаге

while (is_array($progress)) {
   $progress = CSearch::ReIndexAll(true, $max_execution_time, $progress);
}

$total_time = time() - $time_start;

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "AUTO_REINDEX","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => 'reindex finished. total time: ' . $total_time . ' seconds, indexed elements: ' . $progress . "\r\n"));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
