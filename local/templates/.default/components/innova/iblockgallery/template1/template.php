<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<? if(!empty($arResult['ITEMS'])) : ?>
<?
if (!function_exists('innova_iblockgallery_truncate')) {
	function innova_iblockgallery_truncate($text, $length) {
		$length = abs((int)$length);
		if(strlen($text) > $length) {
			$stringCut = substr($text, 0, $length);
			$endPoint = strrpos($stringCut, ' ');
			$text = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
			$text .= '...';
		}
		return($text);
	}
}
?>
<? $id = 'innova_iblockgallery'.$this->randString(); ?>

<? if($arParams["VIEW_TYPE"] == 'grid_slider') : ?>
<div id="<?=$id?>">
	<div class="innova_iblockgallery_slider" id="<?=$id?>_slider">
		<? foreach($arResult['ITEMS'] as $image) : ?>
		<? if(empty($image['PREVIEW_PICTURE'])) continue; ?>
		
		<? $image_url = CFile::GetPath($image['PREVIEW_PICTURE']); ?>
		
		<? 
		$full_image_url = $image_url;
		if(!empty($image['DETAIL_PICTURE']))
			$full_image_url = CFile::GetPath($image['DETAIL_PICTURE']); 
		?>

		<div class="innova_iblockgallery_item" style="width: 250px; height: 250px; cursor: zoom-in !important;" href="<?=$full_image_url?>" data-mediabox="<?=$id?>" data-title="<?=(($arParams["DESCRIPTION"] == 'Y') ? str_replace('"', '', innova_iblockgallery_truncate($image['~DETAIL_TEXT'], $arParams["DESCRIPTION_MAX"])) : '')?>" data-iblockgallery="">
			<span class="innova_iblockgallery_item_image">
				<img src="<?=$image_url?>" alt="<?=$image["PREVIEW_TEXT"]?>" title="<?=$image["DETAIL_TEXT"]?>">
			</span>
			<? if($arParams['TITLE_HOVER'] == 'Y') : ?>
			<div class="innova_iblockgallery_item_information">
				<div class="innova_iblockgallery_item_information_text"><?=$image['NAME']?></div>
				<div class="innova_iblockgallery_overlay"></div>
			</div>
			<? endif; ?>
		</div>
		<? endforeach; ?>
	</div>
</div>

<style>
	.tns-controls button[aria-controls="<?=$id?>_slider"] {
		position: absolute;
		display: block;
		width: 40px;
		height: 40px;
		cursor: pointer;
		outline: none;
		background: transparent;
		padding: 0;
		top: 50%;
		background: rgba(0,0,0,0.47);
		margin-top: -20px;
		font-size: 0;
		border: none;
		z-index: 2;
		right: 7px;
	}
	.tns-controls button[aria-controls="<?=$id?>_slider"]:first-child {
		left: 7px;
	}
	.tns-controls button[aria-controls="<?=$id?>_slider"]:before {
		content: '';
		border: solid white;
		border-width: 0 4px 4px 0;
		display: inline-block;
		padding: 3px;
		position: initial;
		opacity: .75;
		margin: 0;
		background: none;
		height: auto;
		width: auto;
		transform: rotate(-45deg) !important;
		-webkit-transform: rotate(-45deg);
		margin-left: -4px;
	}
	.tns-controls button[aria-controls="<?=$id?>_slider"]:first-child:before {
		transform: rotate(135deg) !important;
		-webkit-transform: rotate(135deg);
		margin-left: 2px;
	}
	.tns-controls button[aria-controls="<?=$id?>_slider"]:hover:before {
		opacity: 1;
	}
	.tns-controls button[aria-controls="<?=$id?>_slider"]:after {
		display:none;
	}
	.tns-outer {
		position: relative;
	}
	
	
	#<?=$id?> .innova_iblockgallery_item:hover .innova_iblockgallery_item_image img {
		<? if($arParams['SCALE_HOVER'] == 'N' and $arParams['ROTATE_HOVER'] == 'Y') : ?>		
		-webkit-transform: perspective(500px) rotateZ(3deg) translate(-50%, -50%);
		transform: perspective(500px) rotateZ(3deg) translate(-50%, -50%);
		<? elseif($arParams['SCALE_HOVER'] != 'N' and $arParams['ROTATE_HOVER'] == 'N') : ?>
		-webkit-transform: perspective(500px) scale3d(1.15, 1.15, 1) translate(-50%, -50%);
		transform: perspective(500px) scale3d(1.1, 1.1, 1) translate(-50%, -50%);
		<? elseif($arParams['SCALE_HOVER'] == 'N' and $arParams['ROTATE_HOVER'] == 'N') : ?>	
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);		
		<? endif; ?>
	}
</style>

<script>
var <?=$id?>_iso = [];
var <?=$id?> = false;
var <?=$id?>_resize;
function initGridSlider_<?=$id?>() {
	
	for (i = 0; i < <?=$id?>_iso.length; i++) {
		<?=$id?>_iso[i].destroy();
		<?=$id?>_iso = [];
	}
	
	if(<?=$id?>) {
		<?=$id?>.destroy();
		<?=$id?> = '';
	}
	
	if(<?=$id?>_resize)
		<?=$id?>_resize.detach()
	
	var size = 0;
	var x = document.getElementById('<?=$id?>_slider').getElementsByClassName('innova_iblockgallery_item');
	var blockWidth = document.getElementById('<?=$id?>_slider').getBoundingClientRect().width;
	var sizeCol = 0;
	var sizeColM = 0;
	var rows = <?=ceil($arParams["COUNT_IMAGE_PAGE"]/$arParams['COUNT_COLS']) ?>;
	var slides = 1;
	var elems_on_page = <?=$arParams["COUNT_IMAGE_PAGE"]?>;
	var slider = [];
	
	sizeCol = <?=$arParams['COUNT_COLS']?>;
	
	sizeColM = <?=$arParams['COUNT_COLS_MOB']?>;
	
	if(window.innerWidth > 768) {
		size = blockWidth/sizeCol;
	} else {
		size = blockWidth/sizeColM;
	}

	for (i = 0; i < x.length; i++) {
		x[i].style.width = size+'px';
		x[i].style.height = size+'px';
		if(slider[slides] == null) {
			slider[slides] = x[i].outerHTML;
		} else {
			slider[slides] += x[i].outerHTML;
		}
		if((i+1) == slides*elems_on_page && ((i+1) < x.length)) {
			slides++;
		}
	}
	document.getElementById('<?=$id?>_slider').innerHTML = "";
	
	for (i = 1; i <= slides; i++) {
		document.getElementById('<?=$id?>_slider').innerHTML += '<div class="innova_iblockgallery_grid">' + slider[i] + "</div>";
	}
	
	var elem = document.getElementsByClassName('innova_iblockgallery_grid');
	
	for (i = 0; i < elem.length; i++) {
		<?=$id?>_iso[i] = new Isotope( elem[i], {
		  itemSelector: '.innova_iblockgallery_item',
		  layoutMode: 'fitRows'
		});
	}
	
	<?=$id?> = tns({
		container: '#<?=$id?>_slider',
		items: 1,
		loop: false,
		rewind: true,
		nav: false,
		autoplay: false,
		slideBy: 'page',
		mouseDrag: true
	});
	
	x = document.getElementById('<?=$id?>_slider').getElementsByClassName('innova_iblockgallery_item');
	
	for (i = 0; i < x.length; i++) {
		WAMediaBoxIIBG.bind(x[i]);
	}
	
	<?=$id?>_resize = new ResizeSensor(document.getElementById('<?=$id?>'), function(){ 
		initGridSlider_<?=$id?>()
	});
}
initGridSlider_<?=$id?>();

</script>

<? else : ?>

<?
foreach($arResult['ITEMS'] as $key=>$image) {
	if(empty($image['PREVIEW_PICTURE'])) unset($arResult['ITEMS'][$key]);
}
$counter = 0;
?>

<div id="<?=$id?>">
	<div class="innova_iblockgallery_slider" id="<?=$id?>_slider">
		<? foreach($arResult['ITEMS'] as $image) : ?>
		<? $tempMath = $counter % $arParams["COUNT_IMAGE_PAGE"]; $counter++;?>
		<?
		if($tempMath == 0 or $counter == 1) {
			echo '<div class="innova_iblockgallery_slide"><div class="innova_iblockgallery_grid">';
			$endTemp = 1;
		}
		?>
		<? $image_url = CFile::GetPath($image['PREVIEW_PICTURE']); ?>
		
		<? 
		$full_image_url = $image_url;
		if(!empty($image['DETAIL_PICTURE']))
			$full_image_url = CFile::GetPath($image['DETAIL_PICTURE']); 
		?>
		<div class="innova_iblockgallery_item" style="width: 250px; height: 250px; cursor: zoom-in !important;" href="<?=$full_image_url?>" data-mediabox="<?=$id?>" data-title="<?=(($arParams["DESCRIPTION"] == 'Y') ? str_replace('"', '', innova_iblockgallery_truncate($image['~DETAIL_TEXT'], $arParams["DESCRIPTION_MAX"])) : '')?>" data-iblockgallery="">
			<span class="innova_iblockgallery_item_image">
				<img src="<?=$image_url?>" alt="<?=$image["PREVIEW_TEXT"]?>" title="<?=$image["DETAIL_TEXT"]?>">
			</span>
			<? if($arParams['TITLE_HOVER'] == 'Y') : ?>
			<div class="innova_iblockgallery_item_information">
				<div class="innova_iblockgallery_item_information_text"><?=$image['NAME']?></div>
				<div class="innova_iblockgallery_overlay"></div>
			</div>
			<? endif; ?>
		</div>
		<?if($arParams["COUNT_IMAGE_PAGE"] == $endTemp) echo '</div></div>';?>
		<?$endTemp++;?>
		<? endforeach; ?>
		<?if(($endTemp-1) != $arParams["COUNT_IMAGE_PAGE"]) echo '</div></div>';?>
	</div>
</div>
<? if(($arResult["ALL_ITEMS"] > $arParams["COUNT_IMAGE_PAGE"]) and $counter > 0) : ?>
<?
	$count_pages = ceil($arResult["ALL_ITEMS"]/$arParams["COUNT_IMAGE_PAGE"]);
?>
<div id="<?=$id?>_nav" class="innova_iblockgallery_nav">
		<?
		for ($i = 1; $i <= $count_pages; $i++) {
			echo '<span>';
			echo $i;
			echo '</span>';
		}
		?>
</div>
<? endif; ?>

<style>
	.tns-outer {
		position: relative;
	}
	
	#<?=$id?> .innova_iblockgallery_item:hover .innova_iblockgallery_item_image img {
		<? if($arParams['SCALE_HOVER'] == 'N' and $arParams['ROTATE_HOVER'] == 'Y') : ?>		
		-webkit-transform: perspective(500px) rotateZ(3deg) translate(-50%, -50%);
		transform: perspective(500px) rotateZ(3deg) translate(-50%, -50%);
		<? elseif($arParams['SCALE_HOVER'] != 'N' and $arParams['ROTATE_HOVER'] == 'N') : ?>
		-webkit-transform: perspective(500px) scale3d(1.15, 1.15, 1) translate(-50%, -50%);
		transform: perspective(500px) scale3d(1.1, 1.1, 1) translate(-50%, -50%);
		<? elseif($arParams['SCALE_HOVER'] == 'N' and $arParams['ROTATE_HOVER'] == 'N') : ?>	
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);		
		<? endif; ?>
	}
</style>

<script>
var <?=$id?>_iso = [];
var <?=$id?> = false;
var <?=$id?>_resize;

<?=$id?> = tns({
	container: '#<?=$id?>_slider',
	items: 1,
	mode: 'gallery',
	loop: false,
	rewind: true,
	nav: true,
	controls: false,
	autoplay: false,
	slideBy: 'page',
	mouseDrag: false,
	navContainer: document.getElementById('<?=$id?>_nav'),
	onInit: initGridSlider_<?=$id?>
});

function initGridSlider_<?=$id?>() {
	
	for (i = 0; i < <?=$id?>_iso.length; i++) {
		<?=$id?>_iso[i].destroy();
		<?=$id?>_iso = [];
	}
	
	var size = 0;
	var x = document.getElementById('<?=$id?>_slider').getElementsByClassName('innova_iblockgallery_item');
	var blockWidth = document.getElementById('<?=$id?>_slider').getBoundingClientRect().width;
	var sizeCol = 0;
	var sizeColM = 0;
	var rows = <?=ceil($arParams["COUNT_IMAGE_PAGE"]/$arParams['COUNT_COLS']) ?>;
	var slides = 1;
	var elems_on_page = <?=$arParams["COUNT_IMAGE_PAGE"]?>;
	var slider = [];
	
	sizeCol = <?=$arParams['COUNT_COLS']?>;
	
	sizeColM = <?=$arParams['COUNT_COLS_MOB']?>;
	
	if(window.innerWidth > 768) {
		size = blockWidth/sizeCol;
	} else {
		size = blockWidth/sizeColM;
	}

	for (i = 0; i < x.length; i++) {
		x[i].style.width = size+'px';
		x[i].style.height = size+'px';
	}
	
	var elem = document.getElementsByClassName('innova_iblockgallery_grid');
	
	for (i = 0; i < elem.length; i++) {
		<?=$id?>_iso[i] = new Isotope( elem[i], {
		  itemSelector: '.innova_iblockgallery_item',
		  layoutMode: 'fitRows'
		});
	}
	
	x = document.getElementById('<?=$id?>_slider').getElementsByClassName('innova_iblockgallery_item');
	
	for (i = 0; i < x.length; i++) {
		WAMediaBoxIIBG.bind(x[i]);
	}
}
<?=$id?>_resize = new ResizeSensor(document.getElementById('<?=$id?>'), function(){ 
	initGridSlider_<?=$id?>()
});

</script>

<? endif; ?>

<? endif; ?>
