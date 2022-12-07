<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
$articul = $_POST['articul'];

ini_set('memory_limit', '2048M');
set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

$i = 0;//для отладки
$lastPricat = COption::GetOptionString('kitlisa.rs', "LAST_PRICAT");

$reader = new XMLReader();
$reader->open($DOCUMENT_ROOT."/upload/parse/pricat/".$lastPricat);

if(isset($reader))
{

	while ($reader->read()) {
		if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {
	
			$product = new SimpleXMLElement($reader->readOuterXml());

			$senderCode = strval($product->SenderPrdCode);
			if($senderCode == $articul) {
				echo '<pre style="text-align:left">'.print_r($product, true).'</pre>';
				$i++;
			} 
		}
	}

} 
if($i == 0) {
	echo 'Товар не найден в выгрузках PRICAT(склад). Введите другой артикул.';
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");