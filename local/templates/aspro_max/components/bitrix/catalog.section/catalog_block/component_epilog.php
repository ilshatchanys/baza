<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
use Bitrix\Main\Loader;
global $arTheme;

$arScripts = [];

if (isset($arParams['SLIDE_ITEMS']) && $arParams['SLIDE_ITEMS'])
	$arScripts[] = 'owl_carousel';

if( CMax::GetFrontParametrValue("HOVER_TYPE_IMG") !== 'none' )
	$arScripts[] = 'animation_ext';

if (isset($templateData['TEMPLATE_LIBRARY']) && !empty($templateData['TEMPLATE_LIBRARY'])){
	$loadCurrency = false;
	if (!empty($templateData['CURRENCIES']))
		$loadCurrency = Loader::includeModule('currency');
	CJSCore::Init($templateData['TEMPLATE_LIBRARY']);
	if ($loadCurrency){?>
	<script type="text/javascript">
		BX.Currency.setCurrencies(<? echo $templateData['CURRENCIES']; ?>);
	</script>
	<?}
}?>

<? if( count($arScripts) ): ?>
	<? \Aspro\Max\Functions\Extensions::init($arScripts); ?>
<? endif; ?>