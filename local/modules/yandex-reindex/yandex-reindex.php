#!/usr/bin/php -q
<?php 
$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/../../..");
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

$date = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/local/modules/yandex-reindex/date.txt');
$dateNow = new DateTime();
$dateCheck = new DateTime($date);

if ($dateNow < $dateCheck)
{
	echo 'Less than';
} else 
{

	ini_set('memory_limit', '-1');
	set_time_limit(0);
	ignore_user_abort(true);
	ini_set('max_execution_time', 0);
	
	CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "START_YANDEX_REINDEX","MODULE_ID" => "sale","ITEM_ID" => "","DESCRIPTION" => ""));
	
	//базовые настройки
	$createFiles = false;
	$domain = 'https://ks-electrica.ru';
	$userId = '228727586';//userId webmasterAPI
	$hostsId = 'https:ks-electrica.ru:443';//hostId webmasterAPI
	$arIblocks = [52];//,32
	
	//актуальный токен достаем на сайте kit-lisa.ru
	function get_content($URL){
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_URL, $URL);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
	}
	
	$tokenAPI = get_content('https://kit-lisa.ru/upload/yandex-reindex-token.txt');
	
	//узнаем квоту на кол-во ссылок для переиндексации
	function sendCurl($url, $token) 
	{
		// OAuth-токен пользователя, от имени которого будут выполняться запросы
		//$token = 'AQAAAAANohsiAAa-XgnwlGikdEa-psdSnRGzr18';
		//--- Подготовка и выполнение запроса -----------------------------------//
		// Установка HTTP-заголовков запроса
		$headers = array(
			"Authorization: OAuth $token",                   // OAuth-токен. Использование слова Bearer обязательно
			"Accept-Language: ru",                            // Язык ответных сообщений
			"Content-Type: application/json; charset=utf-8"   // Тип данных и кодировка запроса
		);
		// Инициализация cURL
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_GET, true);
		/*
		Для полноценного использования протокола HTTPS можно включить проверку SSL-сертификата сервера API Директа.
		Чтобы включить проверку, установите опцию CURLOPT_SSL_VERIFYPEER в true, а также раскомментируйте строку с опцией CURLOPT_CAINFO и укажите путь к локальной копии корневого SSL-сертификата. 
		*/
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		//curl_setopt($curl, CURLOPT_CAINFO, getcwd().'\CA.pem');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		// Выполнение запроса, получение результата
		$result = json_decode(curl_exec($curl), true);
	
		curl_close($curl);
	
		return $result;
	
	}
	function sendReindexCurlPost($url, $data, $token) 
	{
		// OAuth-токен пользователя, от имени которого будут выполняться запросы
		//$token = 'AQAAAAANohsiAAa-XgnwlGikdEa-psdSnRGzr18';
		$headers = array(
		'Content-type: application/xml;charset=UTF-8',
		'Authorization: OAuth '.$token.''
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); // отправка текста в яндекс
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS , $data);
		// Выполнение запроса, получение результата
		$result = json_decode(curl_exec($ch), true);
	
		curl_close($ch);
	
		return $result;
	
	}
	$urlQuota = 'https://api.webmaster.yandex.net/v4/user/' . $userId . '/hosts/' . $hostsId . '/recrawl/quota';
	$quotaInfo = sendCurl($urlQuota, $tokenAPI);
	//print_r($quotaInfo['daily_quota']);
	$dailyQuota = intval($quotaInfo['daily_quota']) / 10 * 9;
	
	//смотрим папку /csv/ и первым обрабатываем файлы по наименованию, сортировка - ASC
	$urlToReindex = 'https://api.webmaster.yandex.net/v4/user/' . $userId . '/hosts/' . $hostsId . '/recrawl/queue';
	
	/*
	 * в процессе обработки вычеркиваем по одной ссылке
	 * если счетчик больше квоты, то собираем просто новые ссылки и пишем в файл
	 * если все файлы пусты, то заполняем их заново
	*/
	$arFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/local/modules/yandex-reindex/csv/",1);
	$filesCount = 0;
	$emptyFilesCount = 0;
	$quotaCount = 0;
	foreach($arFiles as $key => $fileName)
	{
		$csvfile = $_SERVER["DOCUMENT_ROOT"]."/local/modules/yandex-reindex/csv/".$fileName;
	
		if(is_file($csvfile))
		{
			$filesCount++;
		}
	
		if(filesize($csvfile) == 0)
		{
	
			$emptyFilesCount++;
			continue;
	
		}
	
	
		if($quotaCount == $dailyQuota)
		{
			CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "YANDEX_QUOTA_REMINDER_NULL","MODULE_ID" => "sale","ITEM_ID" => "","DESCRIPTION" => ""));
			continue;
		} else
		{
	
			$file = fopen($csvfile, 'r');
			$i = 0;
			$limit = $dailyQuota;
			$arNewLinks = [];
			while (($line = fgetcsv($file)) !== FALSE) {
	
				if($line[0] && $i < $limit)
				{
					$linkData = str_replace(';','',$line[0]);
					$data = '<Data><url>' . $linkData . '</url></Data>';
					sendReindexCurlPost($urlToReindex, $data, $tokenAPI);
					unset($linkData, $data, $reindexInfo);
					sleep(1);
					$quotaCount++;
					$i++;
				}
				if($line[0] && $i >= $limit)
				{
					$arNewLinks[] = $line[0];
				}
	
			}
			fclose($file);
			$fp = fopen($csvfile, 'w');
			foreach($arNewLinks as $link) {
				fputs($fp, $link."\n");
			}
			fclose($fp);
			unset($fp,$limit,$i,$arNewLinks,$csvfile);
	
		}
	
	}
	
	if($emptyFilesCount == $filesCount)
	{
		$createFiles = true;
	}
	
	if($_GET['create_files'] || $createFiles === true)
	{
		CModule::IncludeModule("iblock");
	
		foreach($arIblocks as $iblockID) {
		
			//инфа об инфоблоке
			$resIblock = CIBlock::GetByID($iblockID);
			if($ar_res = $resIblock->GetNext())
			{
				$codeFilenameSections = '1-' . $ar_res['CODE'] . '-sections.csv';
				$codeFilenameElements = '2-' . $ar_res['CODE'] . '-elements.csv';
			}
		
			//секции
			$fp = fopen($_SERVER["DOCUMENT_ROOT"] .'/local/modules/yandex-reindex/csv/' . $codeFilenameSections, 'w');
			$arFilter = array('IBLOCK_ID' => $iblockID);
			$rsSections = CIBlockSection::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter);
			while ($arSection = $rsSections->GetNext())
			{
				$arData = [$domain . $arSection['SECTION_PAGE_URL']];
				$arData = str_replace('"', '', $arData);
				fputs($fp, implode(';', $arData).";\n");
			}
			fclose($fp);
		
		
			//элементы
			$fp = fopen($_SERVER["DOCUMENT_ROOT"] .'/local/modules/yandex-reindex/csv/' . $codeFilenameElements, 'w');
			$arSelect = ["DETAIL_PAGE_URL"];
			$arFilter = ["IBLOCK_ID" => $iblockID];
			$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
			while($ob = $res->GetNextElement()) {
				$arFields = $ob->GetFields();
				$arData = [$domain . $arFields['DETAIL_PAGE_URL']];
				$arData = str_replace('"', '', $arData);
				fputs($fp, implode(';', $arData).";\n");
			}
			fclose($fp);
		
		}
	}

	$randHour = rand(9, 18);
	$randMinutes = rand(10, 59);
	$tomorrowDateTime = new DateTime('tomorrow');
	$content = $tomorrowDateTime->format('Y-m-d') . ' ' . $randHour . ':' . $randMinutes . ':00';
	file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/local/modules/yandex-reindex/date.txt', $content);
	//CEventLog::Add(array("SEVERITY" => "DEBUG","AUDIT_TYPE_ID" => "YANDEX_NEXT_DATE","MODULE_ID" => "sale","ITEM_ID" => "","DESCRIPTION" => ""));
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); 