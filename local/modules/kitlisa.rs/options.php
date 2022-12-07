<?php
$module_id = 'kitlisa.rs';
require_once($_SERVER['DOCUMENT_ROOT'].'/local/modules/'.$module_id.'/include.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/local/modules/'.$module_id.'/CModuleOptions.php');

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTabs = array(
    array(
        'DIV' => 'fedit1',
        'TAB' => GetMessage('KITLISA_RS_OPTIONS_TAB_NAME'), // 'Настройки'
        'ICON' => '',
        'TITLE' => GetMessage('KITLISA_RS_OPTIONS_TAB_NAME') // 'Настройки'
    ),
    array(
        'DIV' => 'fedit2',
        'TAB' => 'Поиск по PRODAT',
        'ICON' => '',
        'TITLE' => 'Поиск по PRODAT',
    ),
    array(
        'DIV' => 'fedit3',
        'TAB' => 'Поиск по PRICAT',
        'ICON' => '',
        'TITLE' => 'Поиск по PRICAT',
    ),
);
$arGroups = array(
	'PRICAT' => array('TITLE' => 'Данные PRICAT', 'TAB' => 0),
  'SEARCH_PRODAT' => array('TITLE' => 'Поиск по PRODAT', 'TAB' => 1),
  'SEARCH_PRICAT' => array('TITLE' => 'Поиск по PRICAT', 'TAB' => 2),
);
$arOptions = array(
		'PRICAT_LOGIN' => array(
        'GROUP' => 'PRICAT',
        'TITLE' => 'Логин', // 'Открытый ключ',
        'TYPE' => 'STRING',
        'DEFAULT' => '',
        'SORT' => '10',
        'SIZE' => 30
        //'NOTES' => ''
    ),
    'PRICAT_PASSWORD' => array(
        'GROUP' => 'PRICAT',
        'TITLE' => 'Пароль', // 'Открытый ключ',
        'TYPE' => 'STRING',
        'DEFAULT' => '',
        'SORT' => '20',
        'SIZE' => 30
        //'NOTES' => ''
    ),
    'LAST_PRICAT_FILE_INFO' => array(
        'GROUP' => 'PRICAT',
		'TITLE' => '<b>Последний загруженный PRICAT</b>', // 'Открытый ключ',
		'VALUE' => 'Название файла: ' . COption::GetOptionString('kitlisa.rs', "LAST_PRICAT") . '<br>Время завершения выгрузки: ' . COption::GetOptionString('kitlisa.rs', "LAST_PRICAT_TIME"),
        'TYPE' => 'CUSTOM',
        'DEFAULT' => '',
        'SORT' => '30',
        'SIZE' => 30
        //'NOTES' => ''
    ),
    /*ПОИСК ПО PRODAT*/
    'PRODAT_SEARCH' => array(
        'GROUP' => 'SEARCH_PRODAT',
        'TITLE' => '',
		'VALUE' => '<input id="js-prodat-search" type="text" size="30" placeholder="Введите код товара" /><input type="button" class="adm-btn-save" id="js-prodat-search-button" value="Найти"><div id="js-prodat-output"></div>',
        'TYPE' => 'CUSTOM',
        'DEFAULT' => '',
        'SORT' => '30',
        //'SIZE' => 30,
        //'NOTES' => 'Введите код из УС отправителя (РС)'
    ),
    /*ПОИСК ПО PRICAT*/
    'PRICAT_SEARCH' => array(
        'GROUP' => 'SEARCH_PRICAT',
        'TITLE' => '',
        'VALUE' => '<input id="js-pricat-search" type="text" size="30" placeholder="Введите код товара" /><input type="button" class="adm-btn-save" id="js-pricat-search-button" value="Найти"><div id="js-pricat-output"></div>',
        'TYPE' => 'CUSTOM',
        'DEFAULT' => '',
        'SORT' => '30',
        //'SIZE' => 30,
        //'NOTES' => 'Введите код из УС отправителя (РС)'
    ),
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
$tabControl->BeginNextTab();
$opt = new CModuleOptions($module_id, $arTabs, $arGroups, $arOptions, false);
$opt->ShowHTML();
$tabControl->EndTab();
$tabControl->End();
CJSCore::Init(array("jquery"));
?>

<script>
$(function(){

  $(document).on('click', '#js-prodat-search-button', function() {
    var senderCode = $('#js-prodat-search').val();
	$( '#js-prodat-output' ).html( 'Поиск товара...' );
    $.post( "/local/modules/kitlisa.rs/lib/search-prodat.php", { articul: senderCode }, function( data ) {
      $( '#js-prodat-output' ).html( data );
    });
  });

  $(document).on('click', '#js-pricat-search-button', function() {
    var senderCode = $('#js-pricat-search').val();
	$( '#js-pricat-output' ).html( 'Поиск товара...' );
    $.post( "/local/modules/kitlisa.rs/lib/search-pricat.php", { articul: senderCode }, function( data ) {
      $( '#js-pricat-output' ).html( data );
    });
  });

});

</script>