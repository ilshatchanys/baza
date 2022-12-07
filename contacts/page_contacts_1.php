<?
$bUseMap = CMax::GetFrontParametrValue('CONTACTS_USE_MAP', SITE_ID) != 'N';
$bUseFeedback = CMax::GetFrontParametrValue('CONTACTS_USE_FEEDBACK', SITE_ID) != 'N';
$showMap = $bUseMap;?>

<?CMax::ShowPageType('page_title');?>

<div class="wrapper_inner_half row flexbox shop-detail1 clearfix" itemscope itemtype="http://schema.org/Organization">
	<div class="item item-shop-detail1  <?=($showMap ? 'col-md-6' : 'col-md-12')?>">
		<div class="left_block_store <?=($showMap ? '' : 'margin0')?>">
			<div class="top_block">
				<?CMax::showContactImg();?>
				
				<?if($arPhotos):?>
					<!-- noindex-->
					<div class="gallery_wrap swipeignore">
						<?//gallery?>
						<div class="big-gallery-block text-center">
						    <div class="owl-carousel owl-theme owl-bg-nav short-nav" data-slider="content-detail-gallery__slider" data-plugin-options='{"items": "1", "autoplay" : false, "autoplayTimeout" : "3000", "smartSpeed":1000, "dots": true, "nav": true, "loop": false, "rewind":true, "margin": 10}'>
							<?foreach($arPhotos as $i => $arPhoto):?>
							    <div class="item">
								<a href="<?=$arPhoto['ORIGINAL']?>" class="fancy" data-fancybox="item_slider" target="_blank" title="<?=$arPhoto['DESCRIPTION']?>">
									<img data-src="<?=$arPhoto['PREVIEW']['src']?>" src="<?=\Aspro\Functions\CAsproMax::showBlankImg($arPhoto['PREVIEW']['src']);?>" class="img-responsive inline lazy" alt="<?=$arPhoto['DESCRIPTION']?>" />
								</a>
							    </div>
							<?endforeach;?>
						    </div>
						</div>
					</div>
					<!-- /noindex-->
				<?endif;?>
			</div>
			<div class="bottom_block">
				<div class="properties clearfix">
					<div class="col-md-6 col-sm-6">
						<?CMax::showContactAddr('Адрес', false);?>
						<?CMax::showContactSchedule('Режим работы', false);?>
					</div>
					<div class="col-md-6 col-sm-6">
						<?CMax::showContactPhones('Телефон', false);?>
						<?CMax::showContactEmail('E-mail', false);?>
					</div>

				</div>
				<div class="social-block">
					<div class="wrap">
						<?$APPLICATION->IncludeComponent(
						    "aspro:social.info.max",
						    ".default",
						    array(
						        "CACHE_TYPE" => "A",
						        "CACHE_TIME" => "3600000",
						        "CACHE_GROUPS" => "N",
						        "TITLE_BLOCK" => "",
						        "COMPONENT_TEMPLATE" => ".default",
						    ),
						    false, array("HIDE_ICONS" => "Y")
						);?>
					</div>
				</div>
				<div class="feedback item">
					<div class="wrap">
						<?//if($arShop['DESCRIPTION']):?>
							<?CMax::showContactDesc();?>
						<?//endif;?>
						<?if($bUseFeedback):?>
							<div class="button_wrap">
								<span>
									<span class="btn  btn-transparent-border-color white  animate-load" data-event="jqm" data-param-form_id="ASK" data-name="contacts">Написать сообщение</span>
								</span>
							</div>
						<?endif;?>
					</div>
				</div>
			</div>
			<div class="clearboth"></div>
		</div>
	</div>
	<?if($showMap):?>
		<div class="item col-md-6 map-full padding0">
			<div class="right_block_store contacts_map">
				<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-map.php", Array(), Array("MODE" => "html", "TEMPLATE" => "include_area.php", "NAME" => "Карта"));?>
			</div>
		</div>
	<?endif;?>
	<?//hidden text for validate microdata?>
	<div class="hidden">
		<?global $arSite;?>
		<span itemprop="name"><?=$arSite["NAME"];?></span>
	</div>
</div>
