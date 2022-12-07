<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Page\Asset;

$Asset = Asset::getInstance();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?=$APPLICATION->ShowTitle();?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
    <?
        $Asset->addCss(SITE_TEMPLATE_PATH.'/css/style.min.css');
        $Asset->addJs(SITE_TEMPLATE_PATH.'/js/app.min.js');
        $Asset->addString('<link rel=”preload” as=”font” href=”' . SITE_TEMPLATE_PATH . '/fonts/Montserrat-Regular.woff2” type=”font/woff2” crossorigin>');
        $Asset->addString('<link rel=”preload” as=”font” href=”' . SITE_TEMPLATE_PATH . '/fonts/Montserrat-Medium.woff2” type=”font/woff2” crossorigin>');
        $Asset->addString('<link rel=”preload” as=”font” href=”' . SITE_TEMPLATE_PATH . '/fonts/icons.woff2” type=”font/woff2” crossorigin>');
        $Asset->addString('<link rel=”preload” as=”font” href=”' . SITE_TEMPLATE_PATH . '/img/favicon.svg” type=”font/woff2” crossorigin>');
        $APPLICATION->ShowHead();
    ?>

	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="panel"><?=$APPLICATION->ShowPanel()?></div>
	<div class="wrapper">
		<header data-scroll="150" data-scroll-show="1000" class="header">
			<div class="header__container_top">
				<nav class="header__top header-top">
					<div data-da=".popup__geo,1150" class="header-top__location">
						<select data-speed="500" name="form[]" class="_location">
							<option value="1" selected>Москва</option>
							<option value="2">Санкт - Петербург</option>
							<option value="3">Дзержинский</option>
						</select>
					</div>
					<div class="header-top__callback">
						<a href="tel:84958774377" class="header-top__number"><span>8 (495) 877-43-77</span></a>
						<div class="header-top__time">Пн-Пт: с 09:00-18:00</div>
					</div>
					<ul class="header-top__menu">
						<li class="header-top__item"><a href="electros.html" class="header-top__link">Сборка электрощитков</a></li>
						<li class="header-top__item"><a href="brands.html" class="header-top__link">Производители</a></li>
						<li class="header-top__item header-top__delivery">
							<select data-pseudo-label="Оплата и Доставка" data-speed="500" name="form[]" class="form">
								<option data-href="terms.html" value="1" selected>Оплата</option>
								<option data-href="delivery.html" value="2">Доставка</option>
								<option data-href="stocks.html" value="3">Акции</option>
								<option data-href="return.html" value="4">Обмен и возврат</option>
							</select>
						</li>
						<li class="header-top__item header-top__about">
							<select data-pseudo-label="О компании" data-speed="500" name="form[]" class="form">
								<option data-href="about.html" value="1" selected>О компании</option>
								<option data-href="news.html" value="2">Новости</option>
								<option data-href="blogs.html" value="3">Статьи</option>
								<option data-href="vacancies.html" value="4">Вакансии</option>
							</select>
						</li>
						<li class="header-top__item header-top__partners">
							<select data-pseudo-label="Компаниям" data-speed="500" name="form[]" class="form">
								<option data-href="vendors.html" value="1" selected>Поставщикам</option>
								<option data-href="organizations.html" value="2">Организациям</option>
								<option data-href="contacts.html" value="3">Контакты</option>
							</select>
						</li>
						<li class="header-top__item"><a href="contacts.html" class="header-top__link">Контакты</a></li>
					</ul>
					<div class="hamburger">
						<div class="hamburger__lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="hamburger__cross">
							<span></span>
							<span></span>
						</div>
					</div>
				</nav>
			</div>
			<div class="header__container_bottom">
				<nav class="header__bottom header-bottom">
					<a class="header-bottom__logos" href="index.html">
						<img class="header-bottom__logo" src="/img/logo.svg" alt="Логотип компании">
						<img class="header-bottom__logoshort" data-src="/img/logoshort.svg" alt="Логотип компании">
					</a>
					<div class="header-bottom__catalog-btn btn-3">
						<div class="icon-catalog">
							<div class="icon-catalog__lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="icon-catalog__cross">
								<span></span>
								<span></span>
							</div>
						</div>
						<span>Продукция</span>
					</div>
					<form data-dev class="header-bottom__search">
						<button type="submit" class="header-bottom__search-btn _icon-search"></button>
						<input data-required autocomplete="off" type="text" name="form[]" data-error="" placeholder="Поиск по таварам" class="header-bottom__search-inp">
						<nav class="search-modal">
							<div data-simplebar class="search-modal__list">
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
								<div class="search-modal__item"><a href="#">Кабели силовые</a></div>
							</div>
						</nav>
					</form>
					<div data-da=".header-top,1150,2" class="header-bottom__actions">
						<a href="tel:84958774377" class="header-bottom__phone header-bottom__action _icon-phone"></a>
						<button data-popup="#location" type="button" class="header-bottom__location header-bottom__action _icon-geo"></button>
						<button type="button" class="header-bottom__search-m header-bottom__action _icon-search"></button>
						<a href="compare.html" class="header-bottom__compare header-bottom__action _icon-lines">
							<span>2</span>
						</a>
						<a href="favorite.html" class="header-bottom__favorites header-bottom__action _icon-like">
							<span class="header-bottom__favorites-span">1</span>
						</a>
						<a href="basket.html" class="header-bottom__basket header-bottom__action _icon-basket">
							<span class="header-bottom__basket-quantity">2</span>
						</a>
						<a href="personal.html" class="header-bottom__personal header-bottom__action _icon-lk"></a>
					</div>
				</nav>
			</div>
		</header>