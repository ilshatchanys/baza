<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "В интернет-магазине КС-ГРУПП вы можете приобрести силовой ящик ЯБПВУ с рубильником по выгодной цене. Доставка по Москве и всей России. Заказывайте на сайте или звоните 8 (495) 374-51-99.");
$APPLICATION->SetPageProperty("title", "Ящик силовой ЯБПВУ купить в Москве по низкой цене");
$APPLICATION->SetTitle("Ящик ЯБПВУ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"catalog_list_simple",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_list_simple",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"OR\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBXmlID\",\"DATA\":{\"logic\":\"Equal\",\"value\":\"14307\"}},{\"CLASS_ID\":\"CondIBXmlID\",\"DATA\":{\"logic\":\"Equal\",\"value\":\"14308\"}},{\"CLASS_ID\":\"CondIBXmlID\",\"DATA\":{\"logic\":\"Equal\",\"value\":\"14309\"}}]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "L",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "52",
		"IBLOCK_TYPE" => "aspro_max_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "",
		"MESS_NOT_AVAILABLE" => "",
		"MESS_SHOW_MAX_QUANTITY" => "Наличие",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "6",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE_MOBILE" => "",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "blok-yashchik-vyklyuchatelya-s-plavkimi-predokhranitelyami",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"UF_SECTION_DESCR",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_RATING" => "Y",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
<p>
	 Вы можете купить готовые ящики ЯБПВУ или заказать ящик по вашему проекту. Для заказа ящика по вашему техническому заданию — оставьте заявку на сборку внизу страницы или звоните по телефону <a href="tel:84953745199">8-(495)-374-51-99</a>.
</p>
<div id="buttons">
 <a href="#anchor" class="scroll btn yellow" style=" border-radius: 5px; font-size: 18px; text-decoration: none; color: #fff; position: relative; display: inline-block;">Заказать сборку ящика <br>
	 ЯБПВУ</a>
</div>
 <br>
<p>
	 ЯБПВУ или внешне силовые ящики – специальное оборудование, которое получило широкое распространение в сфере промышленности и строительства. Встречаются они и в гаражных кооперативах, а также на других объектах, не требующих частой коммутации нагрузки на электроцепь (не чаще 3 раз в час). Такие ящики во многом похожи на обычные распределительные щитки. Разница только в одном – рубильник, используемый для мгновенной смены параметра тока, всегда расположен с внешней стороны. Данное оборудование является обязательным элементом в сетях, напряжение в которых превышает 220 Вт. Оно отвечает не только за включение и выключение электричества, но и предупреждает возникновение пожара или выход из строя дорогостоящей техники. При повышенной нагрузке в электросети комплект из трех предохранитель силового ящика мгновенно обесточит линию.
</p>
<h2>Основные особенности щита ЯБПВУ</h2>
<p>
	 Силовые ящики предназначены для преобразования, потребления, распределения и передачи электричества. При этом нужно отметить, что рубильник можно использовать при силе постоянного тока 440 В, переменного – 360 В. Что касается технических характеристик самого щита, они включают в себя следующие критерии:
</p>
<ul>
	<li>Частота – от 50 до 60 Гц;</li>
	<li>Мощность – до 400 А;</li>
	<li>Защита уровня IP31, IP54;</li>
	<li>Предохранители.</li>
</ul>
<p>
	 Силовые ящики ЯБПВУ с рубильником предназначены для защиты сети от перегрузок и замыканий. Чтобы дверца шкафа не открывалась, в нем предусмотрен единый блок. Это обеспечивает плотное закрывание двери и предупреждает попадание внутрь короба мусора, пыли и воды. В случае необходимости ее можно перевесить – для этого в комплекте есть крепления.
</p>
<p>
	 Рубильник устанавливается отдельно и заземляется. На наличие нагрузки в электрической цепи указывает расположенный сбоку индикатор. Там же находится выход для рукоятки. Каркас силового ящика выполнен из металла, покрытого порошковой антикоррозийной краской. Готовность оборудования к эксплуатации, а также его безопасность подтверждает сертификат.
</p>
<h2>Преимущества ящика ЯБПВУ</h2>
<p>
	 Силовые ящики обладают следующими преимуществами:
</p>
<ul>
	<li>Быстрая и простая установка;</li>
	<li>Высокое качество полимерной краски, которой шкаф покрыт сверху;</li>
	<li>Антивандальный корпус из прочной стали;</li>
	<li>Качественные комплектующие;</li>
	<li>Соответствие государственным стандартам России;</li>
	<li>Повышенная прочность;</li>
	<li>Высокий уровень антикоррозийной стойкости;</li>
	<li>Заменяемые элементы – при сгорании одного предохранителя всегда можно поставить новый. Главное, устранить причину короткого замыкания, иначе оно повторится вновь.</li>
</ul>
<h2 id="anchor">Купить ящик ЯБПВУ в Москве </h2>
<p>
	 Вы можете купить ящик ЯБПВУ силовой с рубильником по низкой цене, а также заказать пусконаладку в нашем интернет-магазине. Мы работаем с ведущими производителями ящиков ЯБПВУ. Доставка осуществляется по г. Москве (собственным транспортом) и всей России через транспортные компании. Возможен самовывоз.
</p>
<p>
	 Оформить заказ вы можете онлайн, путем добавления товара в корзину. Если вам нужна помощь в выборе или есть вопросы об условиях заказа, звоните по номеру <a href="tel:84953745199">8-(495)-374-51-99</a>.
</p>
 <script data-b24-form="inline/3/id5hlm" data-skip-moving="true">
	(function(w,d,u){
		var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
		var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://cdn-ru.bitrix24.ru/b16952602/crm/form/loader_3.js');
</script> <br>
<table class="GeneratedTable">
<tbody>
<tr>
	<td>
 <img width="40px" src="/upload/guarantee.svg"> <span style="font-weight: 700;">
		Наши преимущества</span>
		<ul>
			<li>Предоставляем паспорта и сертификаты; </li>
			<li>Отсрочка постоянным покупателям; </li>
			<li>Менеджеры на связи 24\7; </li>
			<li>Сборка щитов согласно ГОСТ Р 51321.1-2007; </li>
			<li>Выгодные цены на сборку; </li>
			<li>Квалифицированный персонал; </li>
			<li>Качественные комплектующие. </li>
		</ul>
	</td>
	<td>
 <img width="40px" src="/upload/van.svg"> <span style="font-weight: 700;">
		Условия доставки</span>
		<ul>
			<li>Имеется собственный автопарк для оперативной доставки продукции по Москве и МО; </li>
			<li>Отправка продукции в регионы через транспортные компании (ПЭК, СДЭК, Деловые Линии, АРТЭК); </li>
			<li>Возможен самовывоз со склада. </li>
		</ul>
	</td>
</tr>
<tr>
	<td>
 <img width="40px" src="/upload/like.svg"> <span style="font-weight: 700;">Сервис</span>
		<ul>
			<li>Квалифицированное обслуживание; </li>
			<li>Оперативное производство щитов; </li>
			<li>Оперативная доставка. </li>
		</ul>
	</td>
	<td>
 <img width="40px" src="/upload/group.svg"> <span style="font-weight: 700;">О нас</span>
		<ul>
			<li>Работаем с физическими и юридическими лицами; </li>
			<li>Более 9 лет на рынке электротехнической продукции; </li>
			<li>Продаем продукцию только по стандартам ГОСТ. </li>
		</ul>
	</td>
</tr>
</tbody>
</table>
<style>

html {
            scroll-behavior: smooth;
        }

table.GeneratedTable {
table-layout: fixed;
margin: auto;
  width: 90%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  color: #000000;
word-wrap: break-word;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  padding: 2px;
}
.btn {
  border-radius: 5px;
  font-size: 18px;
  text-decoration: none;
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}
.yellow {
  background-color: #f1c40f;
  box-shadow: 0px 5px 0px 0px #D8AB00;
}

.yellow:hover {
  background-color: #FFDE29;
}
.link {
  text-decoration: none;
  color: #55acee;
  border-bottom: 2px dotted #55acee;
  transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
}
.link:hover {
  color: #2ecc71;
  border-bottom: 2px dotted #2ecc71;
}
#buttons {
  padding-top: 50px;
  text-align: center;
}
table {
    border-collapse: collapse;
}

td {
    padding:5px;
    padding-right: 30px;
}
.table th, .table td {
	border: 1px solid #888;
	padding: 10px;
	text-align: center;
	vertical-align: middle;
	position: relative;
}
.table td:hover {
	background: #fffabe;
}
.table td:hover:after {
	
	position: absolute;
	top: 0px;
	right: 0px; 
	bottom: 0px;    
	left: 0px;
	border: 3px solid orange;
}
.section {
  margin: 60px 0 /* внешние отступы для блока - сверху и снизу по 60px, слева и справа по 0px */;
}
@media (max-width: 575.98px) {
  table.GeneratedTable {
table-layout: fixed;
margin: auto;
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  color: #000000;
word-wrap: break-word;
}
}

</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>