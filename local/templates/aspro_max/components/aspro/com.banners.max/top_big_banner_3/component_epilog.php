<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arScripts = ['swiper', 'swiper_main_styles', 'top_banner'];
if ($templateData['HAS_VIDEO']) {
	$arScripts[] = 'video_banner';
}
\Aspro\Max\Functions\Extensions::init($arScripts);
?>