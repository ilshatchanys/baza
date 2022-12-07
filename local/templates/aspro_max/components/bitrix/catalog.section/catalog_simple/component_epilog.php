<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
use Bitrix\Main\Loader;

if (isset($arParams['SLIDE_ITEMS']) && $arParams['SLIDE_ITEMS']):?>
    <?\Aspro\Max\Functions\Extensions::init('owl_carousel');?>
<?endif;?>