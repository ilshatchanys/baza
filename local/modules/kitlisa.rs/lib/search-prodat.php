<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
$articul = $_POST['articul'];

ini_set('memory_limit', '2048M');
set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

$arUnzipFiles = scandir($_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/",1);
$xmlfile = $_SERVER["DOCUMENT_ROOT"]."/upload/parse/unzip/".$arUnzipFiles[0];
$reader = new XMLReader();
$reader->open($xmlfile);
unset($xmlfile,$arUnzipFiles);

$i = 0;
while ($reader->read()) {
    if($reader->nodeType == XMLReader::ELEMENT && $reader->name == 'DocDetail' ) {

		$product = new SimpleXMLElement($reader->readOuterXml());

		if($product->SenderPrdCode == $articul) {
			echo '<pre style="text-align:left">'.print_r($product, true).'</pre>';
			$i++;
		} 


    }
}
if($i == 0) {
	echo 'Товар не найден в выгрузке PRODAT(склад). Введите другой артикул.';
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");