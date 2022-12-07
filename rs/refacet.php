#!/usr/bin/php -q
<?php 
$_SERVER["DOCUMENT_ROOT"] = "/home/k/ksgrupp/ksgrupp.beget.tech/public_html"; 
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


CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "AUTO_FACET_START","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => ""));

CModule::IncludeModule('iblock'); 

$filter = array(
	"IBLOCK_ID" => 18,
	"INCLUDE_SUBSECTIONS" => "Y",
	"IBLOCK_ACTIVE" => "Y",
	"ACTIVE_DATE" => "Y",
	"CHECK_PERMISSIONS" => "Y",
	"MIN_PERMISSION" => "R",
);

$cnt = CIBlockElement::GetList(
	array(),
	array($filter),
	array(),
	false
);

$cnt = intval($cnt);

$params = [
    'cnt' => 0, //Всего элементов проиндексированно
    'last_id' => 0, //Последний элемент
    'total' => 0, //Всего элементов
    'iblock_id' => 18, //ИД инфоблока
    'max_execution_time' => 600, //время исполнения
    'first_start' => true, //Первый запуск
];


while($params['cnt'] <= $cnt) {
  $params = reindex_iblock($params);
  CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "AUTO_FACET","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => 'facet count: ' . $params['cnt'] . "\r\n"));
	if($params['cnt'] == $cnt){
		break;
	}
}

CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "AUTO_FACET_END","MODULE_ID" => "catalog","ITEM_ID" => "","DESCRIPTION" => 'facet count: ' . $params['cnt'] . "\r\n"));


/**
     * Создание фасетного индекса
     * @param array $params Параметры запуска согласно ключам в функции
     */
    function reindex_iblock($params) {
 
        $index = \Bitrix\Iblock\PropertyIndex\Manager::createIndexer($params['iblock_id']);
 
        if ($params['first_start']) {
            $params['cnt'] = 0;
            $params['last_id'] = 0;
            $index->startIndex();
            $params['total'] = $index->estimateElementCount();
            $params['first_start'] = false;
        }
 
        $index->setLastElementId($params['last_id']);
 
        $res = $index->continueIndex($params['max_execution_time']);
 
        if ($res > 0) {
            $params['cnt'] += $res;
            $params['last_id'] = $index->getLastElementId();
        } else {
 
            $index->endIndex();
 
            \CBitrixComponent::clearComponentCache("bitrix:catalog.smart.filter");
 
            \CIBlock::clearIblockTagCache($params['iblock_id']);
        }
 
        return $params;
    }

/**
     * Проверяет нужна ли индексация информационному блоку
     * @return boolean true - требуется индексация
     */
    function check_iblock_index($iblock_id) {
 
        $iblockInfo = \Bitrix\Iblock\IblockTable::getList(array(
                    'select' => array('ID', 'PROPERTY_INDEX'),
                    'filter' => array('=ID' => $iblock_id)
                ))->fetch();
 
        return ($iblockInfo['PROPERTY_INDEX'] == 'I');
    }


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");