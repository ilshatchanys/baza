<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<div class="social-icons">
	<!-- noindex -->
	<ul>
		<?if(!empty($arResult['SOCIAL_FACEBOOK'])):?>
			<li class="facebook">
				<a href="<?=$arResult['SOCIAL_FACEBOOK']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_FACEBOOK')?>">
					<?=CMax::showIconSvg("fb", SITE_TEMPLATE_PATH."/images/svg/social/Facebook.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_FACEBOOK')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_VK'])):?>
			<li class="vk">
				<a href="<?=$arResult['SOCIAL_VK']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_VK')?>">
					<?=CMax::showIconSvg("vk", SITE_TEMPLATE_PATH."/images/svg/social/Vk.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_VK')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_TWITTER'])):?>
			<li class="twitter">
				<a href="<?=$arResult['SOCIAL_TWITTER']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_TWITTER')?>">
					<?=CMax::showIconSvg("tw", SITE_TEMPLATE_PATH."/images/svg/social/Twitter.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_TWITTER')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_INSTAGRAM'])):?>
			<li class="instagram">
				<a href="<?=$arResult['SOCIAL_INSTAGRAM']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_INSTAGRAM')?>">
					<?=CMax::showIconSvg("inst", SITE_TEMPLATE_PATH."/images/svg/social/Instagram.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_INSTAGRAM')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_TELEGRAM'])):?>
			<li class="telegram">
				<a href="https://t.me/ksgroupelectrika/" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_TELEGRAM')?>">
					<?=CMax::showIconSvg("tel", SITE_TEMPLATE_PATH."/images/svg/social/Telegram.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_TELEGRAM')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_YOUTUBE'])):?>
			<li class="ytb">
				<a href="<?=$arResult['SOCIAL_YOUTUBE']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_YOUTUBE')?>">
					<?=CMax::showIconSvg("yt", SITE_TEMPLATE_PATH."/images/svg/social/Youtube.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_YOUTUBE')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_ODNOKLASSNIKI'])):?>
			<li class="odn">
				<a href="<?=$arResult['SOCIAL_ODNOKLASSNIKI']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_ODNOKLASSNIKI')?>">
					<?=CMax::showIconSvg("ok", SITE_TEMPLATE_PATH."/images/svg/social/Odnoklassniki.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_ODNOKLASSNIKI')?>
				</a>
			</li>
		<?endif;?>
		<?/*if(!empty($arResult['SOCIAL_GOOGLEPLUS'])):?>
			<li class="gplus">
				<a href="<?=$arResult['SOCIAL_GOOGLEPLUS']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_GOOGLEPLUS')?>">
					<?=CMax::showIconSvg("gp", SITE_TEMPLATE_PATH."/images/svg/social/Googleplus.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_GOOGLEPLUS')?>
				</a>
			</li>
		<?endif;*/?>
		<?if(!empty($arResult['SOCIAL_MAIL'])):?>
			<li class="mail">
				<a href="<?=$arResult['SOCIAL_MAIL']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_MAILRU')?>">
					<?=CMax::showIconSvg("ml", SITE_TEMPLATE_PATH."/images/svg/social/Mailru.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_MAILRU')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_VIBER']) || !empty($arResult["SOCIAL_VIBER_CUSTOM_MOBILE"]) ):?>
			<?$hrefMobile = strlen(trim($arResult["SOCIAL_VIBER_CUSTOM_MOBILE"])) ? $arResult["SOCIAL_VIBER_CUSTOM_MOBILE"] : 'viber://add?number='.$arResult['SOCIAL_VIBER'];?>
			<li class="viber">
				<a href="<?=$hrefMobile?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_VIBER')?>">
					<?=CMax::showIconSvg("vi", SITE_TEMPLATE_PATH."/images/svg/social/Viber.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_VIBER')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_WHATS']) || !empty($arResult["SOCIAL_WHATS_CUSTOM"])):?>
			<?
			if( strlen(trim($arResult["SOCIAL_WHATS_CUSTOM"])) ){
				$whatsHref = $arResult["SOCIAL_WHATS_CUSTOM"];
			} else {
				if(defined('LANG_CHARSET') && strtolower(LANG_CHARSET) == 'windows-1251'){
					$text = iconv("windows-1251","utf-8", $arResult['SOCIAL_WHATS_TEXT']);
				} else {
					$text = $arResult['SOCIAL_WHATS_TEXT'];
				}
				$bWhatsText = !empty($arResult['SOCIAL_WHATS_TEXT']);
				$whatsText = $bWhatsText ? '?text='.rawurlencode($text) : '';
				$whatsHref = 'https://wa.me/'.$arResult['SOCIAL_WHATS'].$whatsText;
			}			
			?>
			<li class="whats">
				<a href="<?=$whatsHref?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_WHATS')?>">
					<?=CMax::showIconSvg("wh", SITE_TEMPLATE_PATH."/images/svg/social/Whatsapp.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_WHATS')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_ZEN'])):?>
			<li class="zen">
				<a href="<?=$arResult['SOCIAL_ZEN']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_ZEN')?>">
					<?=CMax::showIconSvg("zen", SITE_TEMPLATE_PATH."/images/svg/social/Zen.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_ZEN')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_TIKTOK'])):?>
			<li class="tiktok">
				<a href="<?=$arResult['SOCIAL_TIKTOK']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_TIKTOK')?>">
					<?=CMax::showIconSvg("tt", SITE_TEMPLATE_PATH."/images/svg/social/Tiktok.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_TIKTOK')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_PINTEREST'])):?>
			<li class="pinterest">
				<a href="<?=$arResult['SOCIAL_PINTEREST']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_PINTEREST')?>">
					<?=CMax::showIconSvg("pt", SITE_TEMPLATE_PATH."/images/svg/social/Pinterest.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_PINTEREST')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_SNAPCHAT'])):?>
			<li class="snapchat">
				<a href="<?=$arResult['SOCIAL_SNAPCHAT']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_SNAPCHAT')?>">
					<?=CMax::showIconSvg("sc", SITE_TEMPLATE_PATH."/images/svg/social/Snapchat.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_SNAPCHAT')?>
				</a>
			</li>
		<?endif;?>
		<?if(!empty($arResult['SOCIAL_LINKEDIN'])):?>
			<li class="linkedin">
				<a href="<?=$arResult['SOCIAL_LINKEDIN']?>" class="dark-color" target="_blank" rel="nofollow" title="<?=GetMessage('TEMPL_SOCIAL_LINKEDIN')?>">
					<?=CMax::showIconSvg("linkedin", SITE_TEMPLATE_PATH."/images/svg/social/Linkedin.svg");?>
					<?=GetMessage('TEMPL_SOCIAL_LINKEDIN')?>
				</a>
			</li>
		<?endif;?>
	</ul>
	<!-- /noindex -->
</div>