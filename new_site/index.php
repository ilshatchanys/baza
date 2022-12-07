<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Компания электрики и электротоваров ООО \"КС-ГРУПП\"");
?>
        <main class="page page-home">
			<section data-tabs data-tabs-animate="500" class="catalog tabs">
				<h2 hidden>Каталог товаров</h2>
				<nav data-tabs-titles class="catalog__menu tabs__navigation">
					<button type="button" class="catalog__title tabs__title _tab-active">Кабели и провода</button>
					<button type="button" class="catalog__title tabs__title">Светильники</button>
					<button type="button" class="catalog__title tabs__title">Лампы</button>
					<button type="button" class="catalog__title tabs__title">Электроустановочные изделия</button>
					<button type="button" class="catalog__title tabs__title">Кабеленесущие системы</button>
					<button type="button" class="catalog__title tabs__title">Устройства защиты</button>
					<button type="button" class="catalog__title tabs__title">Оборудование низковольтное</button>
					<button type="button" class="catalog__title tabs__title">Электрические распределительные системы</button>
					<button type="button" class="catalog__title tabs__title">Арматура кабельная / Изоляционные материалы</button>
					<button type="button" class="catalog__title tabs__title">Отопительные приборы / Технологические и инженерные системы</button>
					<button type="button" class="catalog__title tabs__title">Соединители для шлангов и рукавов</button>
					<button type="button" class="catalog__title tabs__title">Оборудование паяльное и сварочное</button>
					<button type="button" class="catalog__title tabs__title">Котлы и обогреватели</button>
					<button type="button" class="catalog__title tabs__title">Системы распределения высокого напряжения</button>
					<a href="catalogs.html" class="catalog__title catalog__viewall _icon-upar">Все категории</a>
				</nav>
				<div data-tabs-body class="catalog__content tabs__content">
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Светильники 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Лампы 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
					<div class="tabs__body">
						<ul class="subcatalog">
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели силовые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели телефонные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели коаксиальные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели электрические</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Тип жилы</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели медные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели алюминевые</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели со стальными жилами</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели CCS</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество жил</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели одножильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели четырехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели двухжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели трехжильные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 40</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Применение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для прокладки в земле</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки дома</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для проводки</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели для видеонаблюдения</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Допустимое напряжение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 220 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 380 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 660 В</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 кВ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Сечение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.08</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0,5 мм</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.12</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели сечением 0.22</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 31</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Защитный покров</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без защитного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели без наружного покрова</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с защитным шлангом</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Исполнение</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели витая пара</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели бронированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели гибкие</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели экранированные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 99</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Калибр (AWG)</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 14 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 16 AWG</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 16</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Материал оболочки</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели стекловолоконные</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с пластмассовой оболочкой</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели в резиновой оболочке</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели с оболочкой РЕ</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 13</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Количество волокон</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 144 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 32 волокна</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 1 волокно</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 12 волокон</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link subcatalog__more">Еще 15</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Размер волокна</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 10/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 50/25</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 62,5/125</a></li>
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 9/125</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<div class="subcatalog__title">Мощность</div>
								<ul class="subcatalog__sublist">
									<li class="subcatalog__subitem"><a href="#" class="subcatalog__link">Кабели 25 Вт/м</a></li>
								</ul>
							</li>
							<li class="subcatalog__item">
								<a href="#" class="catalog__viewall subcatalog__allgroups  _icon-upar">Все группы</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<nav hidden class="catalog-mini">

				<div class="catalog-mini__title header-bottom__catalog-btn">
					<div class="icon-catalog">
						<div id="catalog-bruger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div id="catalog-cross">
							<span></span>
							<span></span>
						</div>
					</div>
					<span>Каталог товаров</span>
				</div>
				<ul class="catalog-mini__list">
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Кабели и провода</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Светильники</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Лампы</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Электроустановочные изделия</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Кабеленесущие системы</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Устройства защиты</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Оборудование низковольтное</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Электрические распределительные системы</a></li>
					<li class="catalog-mini__item"><a href="#" class="catalog-mini__link">Бытовая техника крупная</a></li>
				</ul>
				<a href="catalogs.html" class="catalog-mini__viewall _icon-ar">Показать все категории</a>
			</nav>
			<div class="page-home__container">
				<nav class="nav">
					<ul class="nav__list m-txt">
						<li class="nav__item"><a href="index.html" class="nav__link">Главная</a></li>
						<li class="nav__item"><a href="#" class="nav__link">Акции</a></li>
						<li class="nav__item"><a href="#" class="nav__link">Акция</a></li>
					</ul>
				</nav>
				<section class="page-home__promotions mb">
					<div class="promotions">
						<div class="promotions__slider swiper">
							<div class="promotions__bg"></div>
							<div class="promotions__wrapper swiper-wrapper">
								<div class="promotions__slide swiper-slide">
									<div class="promotions__content">
										<div data-swiper-parallax-scale="0" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="promotions__title">Кабель<p>по лучшим ценам</p>
										</div>
										<a href="#" class="promotions__btn btn-5">Смотреть</a>
									</div>
									<div class="promotions__image">
										<picture><source data-srcset="/img/home/block-1/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="promotions__img swiper-lazy" src="/img/1.svg" data-src="/img/home/block-1/1.jpg" alt="Изображение слайда"></picture>
									</div>
								</div>
								<div class="promotions__slide swiper-slide">
									<div class="promotions__content">
										<div data-swiper-parallax-scale="0" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="promotions__title">Кабель<p>по лучшим ценам</p>
										</div>
										<a href="#" class="promotions__btn btn-5">Смотреть</a>
									</div>
									<div class="promotions__image">
										<picture><source data-srcset="/img/electros/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="promotions__img swiper-lazy" src="/img/1.svg" data-src="/img/electros/3.jpg" alt="Изображение слайда"></picture>
									</div>
								</div>
								<div class="promotions__slide swiper-slide">
									<div class="promotions__content">
										<div data-swiper-parallax-scale="0" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="promotions__title">Кабель<p>по лучшим ценам</p>
										</div>
										<a href="#" class="promotions__btn btn-5">Смотреть</a>
									</div>
									<div class="promotions__image">
										<picture><source data-srcset="/img/electro/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="promotions__img swiper-lazy" src="/img/1.svg" data-src="/img/electro/3.jpg" alt="Изображение слайда"></picture>
									</div>
								</div>
								<div class="promotions__slide swiper-slide">
									<div class="promotions__content">
										<div data-swiper-parallax-scale="0" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="promotions__title">Кабель<p>по лучшим ценам</p>
										</div>
										<a href="#" class="promotions__btn btn-5">Смотреть</a>
									</div>
									<div class="promotions__image">
										<picture><source data-srcset="/img/blogs/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="promotions__img swiper-lazy" src="/img/1.svg" data-src="/img/blogs/3.jpg" alt="Изображение слайда"></picture>
									</div>
								</div>
								<div class="promotions__slide swiper-slide">
									<div class="promotions__content">
										<div data-swiper-parallax-scale="0" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="promotions__title">Кабель<p>по лучшим ценам</p>
										</div>
										<a href="#" class="promotions__btn btn-5">Смотреть</a>
									</div>
									<div class="promotions__image">
										<picture><source data-srcset="/img/electro/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="promotions__img swiper-lazy" src="/img/1.svg" data-src="/img/electro/2.jpg" alt="Изображение слайда"></picture>
									</div>
								</div>
							</div>
							<div class="promotions__pagination"></div>
						</div>
					</div>
					<div class="daily">
						<div class="daily__slider swiper">
							<div class="daily__info">
								<h2 class="daily__title">Товары дня</h2>
								<div class="daily__arrows">
									<div class="daily__arrow daily__arrow_1 _icon-ar"></div>
									<div class="daily__arrow daily__arrow_2 _icon-ar"></div>
								</div>
							</div>
							<div class="daily__wrapper swiper-wrapper">
								<div class="daily__slide swiper-slide">
									<article class="daily__item">
										<a class="daily__link" href="product.html">
											<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="daily__img swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
											<h3 class="daily__name">Светильник настол. черн.</h3>
											<div class="daily__price">519,60 ₽</div>
										</a>
										<div class="daily__buttons">
											<button type="button" class="daily__btn btn-2">В корзину</button>
											<button type="button" class="daily__likes likes"></button>
										</div>
									</article>
								</div>
								<div class="daily__slide swiper-slide">
									<article class="daily__item">
										<a class="daily__link" href="product.html">
											<picture><source data-srcset="/img/products/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="daily__img swiper-lazy" data-src="/img/products/3.jpg" alt="Изображение товара"></picture>
											<h3 class="daily__name">Кабель настол. настол. черн. ГОСТ 1223</h3>
											<div class="daily__price">519,60 ₽</div>
										</a>
										<div class="daily__buttons">
											<button type="button" class="daily__btn btn-2">В корзину</button>
											<button type="button" class="daily__likes likes"></button>
										</div>
									</article>
								</div>
								<div class="daily__slide swiper-slide">
									<article class="daily__item">
										<a href="product.html" class="daily__link">
											<picture><source data-srcset="/img/products/6.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="daily__img swiper-lazy" data-src="/img/products/6.jpg" alt="Изображение товара"></picture>
											<h3 class="daily__name">Кабель настол. настол. черн. ГОСТ 1223</h3>
											<div class="daily__price">519,60 ₽</div>
										</a>
										<div class="daily__buttons">
											<button type="button" class="daily__btn btn-2">В корзину</button>
											<button type="button" class="daily__likes likes"></button>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="page-home__info home-info mb">
					<ul class="home-info__list">
						<li data-watch data-watch-once class="home-info__item an">
							<div class="home-info__img _icon-delivery3"></div>
							<h3 class="home-info__title">Быстрая доставка</h3>
							<p class="home-info__text m-txt">Бережно доставляем товары по России</p>
						</li>
						<li data-watch data-watch-once class="home-info__item an">
							<div class="home-info__img _icon-paket"></div>
							<h3 class="home-info__title">Кэшбек за покупки</h3>
							<p class="home-info__text m-txt">Получи подарки и скидки</p>
						</li>
						<li data-watch data-watch-once class="home-info__item an">
							<div class="home-info__img _icon-safe"></div>
							<h3 class="home-info__title">Гарантия качества</h3>
							<p class="home-info__text m-txt"> Гарантированно оригинальная продукция</p>
						</li>
						<li data-watch data-watch-once class="home-info__item an">
							<div class="home-info__img _icon-safe"></div>
							<h3 class="home-info__title">Гарантия качества</h3>
							<p class="home-info__text m-txt">Гарантированно оригинальная продукция</p>
						</li>
					</ul>
				</section>
				<section data-watch data-watch-once class="page-home__brands-slider brands-sl sl mb">
					<h2 hidden>Наши бренды</h2>
					<div class="brands-sl__arrow sl-arrow _icon-bigar"></div>
					<div class="brands-sl__slider sl-sw swiper">
						<div class="brands-sl__wrapper swiper-wrapper">
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/1.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/2.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/3.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/4.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/4.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/4.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/4.svg" alt="Логотип бренда">
								</a>
							</div>
							<div class="brands-sl__slide swiper-slide">
								<a href="brand.html" class="brands-sl__image-ibc">
									<img class="swiper-lazy" src="/img/1.svg" data-src="/img/brands/4.svg" alt="Логотип бренда">
								</a>
							</div>
						</div>
					</div>
				</section>
				<section class="page-home__category-slider">
					<div class="sl-span">
						<h2 class="home-area__title">Популярные категории</h2>
						<a href="catalogs.html" class="home-area__link">Перейти в каталог</a>
					</div>
					<div class="category-sl sl mb">
						<div class="category-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="category-sl__category-sl sl-sw swiper">
							<div class="category-sl__wrapper swiper-wrapper">
								<article class="category-sl__slide swiper-slide">
									<div class="category-sl__content">
										<h2 class="category-sl__name">Кабель силовой</h2>
										<a href="category.html" class="category-sl__image-ibc">
											<picture><source data-srcset="/img/products/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/3.jpg" alt="Изображение товара"></picture>
										</a>
										<a href="category.html" class="category-sl__btn _icon-upar"><span>товара</span><span>1092 </span></a>
									</div>
								</article>
								<article class="category-sl__slide swiper-slide">
									<div class="category-sl__content">
										<h2 class="category-sl__name">Светильники</h2>
										<a href="category.html" class="category-sl__image-ibc">
											<picture><source data-srcset="/img/products/4.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/4.jpg" alt="Изображение товара"></picture>
										</a>
										<a href="category.html" class="category-sl__btn _icon-upar"><span>товара</span><span>1092 </span></a>
									</div>
								</article>
								<article class="category-sl__slide swiper-slide">
									<div class="category-sl__content">
										<h2 class="category-sl__name">Лампы</h2>
										<a href="category.html" class="category-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</a>
										<a href="category.html" class="category-sl__btn _icon-upar"><span>товара</span><span>1092 </span></a>
									</div>
								</article>
								<article class="category-sl__slide swiper-slide">
									<div class="category-sl__content">
										<h2 class="category-sl__name">Бытовая техника</h2>
										<a href="category.html" class="category-sl__image-ibc">
											<picture><source data-srcset="/img/products/5.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/5.jpg" alt="Изображение товара"></picture>
										</a>
										<a href="category.html" class="category-sl__btn _icon-upar"><span>товара</span><span>1092 </span></a>
									</div>
								</article>
							</div>
						</div>
					</div>

				</section>
				<div class="page-home__slider-goods">
					<div class="title-nav">
						<h2 class="title-nav__title">Хиты продаж</h2>
						<select data-speed="500" data-pseudo-label="Выбрать категорию" name="form[3]" class="form">
							<option value="1">Кабели и провода</option>
							<option value="2">Светильники</option>
							<option value="3">Лампы</option>
							<option value="4">Электроустановочные изделия</option>
							<option value="4">Кабеленесущие системы</option>
							<option value="4">Бытовая техника крупная</option>
						</select>
					</div>


					<div class="goods-sl__body sl mb">
						<div class="goods-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="goods-sl__goods-sl sl-sw swiper">
							<div class="goods-sl__wrapper swiper-wrapper">
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
							</div>
						</div>
					</div>

				</div>
				<section class="page-home__slider-popular">
					<div class="title-nav">
						<h2 class="title-nav__title">Новинки</h2>
						<select data-speed="500" data-pseudo-label="Выбрать категорию" name="form[3]" class="form">
							<option value="1">Кабели и провода</option>
							<option value="2">Светильники</option>
							<option value="3">Лампы</option>
							<option value="4">Электроустановочные изделия</option>
							<option value="4">Кабеленесущие системы</option>
							<option value="4">Бытовая техника крупная</option>
						</select>
					</div>


					<div class="popular-sl sl mb">
						<div class="popular-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="popular-sl__popular-sl sl-sw swiper">
							<div class="popular-sl__wrapper swiper-wrapper">
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
							</div>
						</div>
					</div>

				</section>
				<section class="page-home__area home-area mb">
					<div class="sl-span">
						<h2 class="home-area__title">Продукция для:</h2>
						<a href="catalogs.html" class="home-area__link">Перейти в каталог</a>
					</div>
					<ul class="home-area__list">
						<li data-watch data-watch-once class="home-area__item">
							<a href="#" class="home-area__slide">
								<picture><source data-srcset="/img/home/block-6/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-area__image" data-src="/img/home/block-6/1.png" alt="Изображение"></picture>
								<h3 class="home-area__subtitle">Коммерческих помещений</h3>
							</a>
						</li>
						<li data-watch data-watch-once class="home-area__item">
							<a href="" class="home-area__slide">
								<picture><source data-srcset="/img/home/block-6/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-area__image" data-src="/img/home/block-6/2.png" alt="Изображение"></picture>
								<h3 class="home-area__subtitle">Дома</h3>
							</a>
						</li>
						<li data-watch data-watch-once class="home-area__item">
							<a href="" class="home-area__slide">
								<picture><source data-srcset="/img/home/block-6/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-area__image" data-src="/img/home/block-6/3.png" alt="Изображение"></picture>
								<h3 class="home-area__subtitle">Офиса</h3>
							</a>
						</li>
						<li data-watch data-watch-once class="home-area__item">
							<a href="" class="home-area__slide">
								<picture><source data-srcset="/img/home/block-6/4.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-area__image" data-src="/img/home/block-6/4.png" alt="Изображение"></picture>
								<h3 class="home-area__subtitle">Ремонта</h3>
							</a>
						</li>
						<li data-watch data-watch-once class="home-area__item">
							<a href="" class="home-area__slide">
								<picture><source data-srcset="/img/home/block-6/5.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-area__image" data-src="/img/home/block-6/5.png" alt="Изображение"></picture>
								<h3 class="home-area__subtitle">Для самостоятельных работ</h3>
							</a>
						</li>
					</ul>
				</section>
				<section class="page-home__slider-goods">
					<div class="title-nav">
						<h2 class="title-nav__title">Спецпредложения</h2>
						<select data-speed="500" data-pseudo-label="Выбрать категорию" name="form[3]" class="form">
							<option value="1">Кабели и провода</option>
							<option value="2">Светильники</option>
							<option value="3">Лампы</option>
							<option value="4">Электроустановочные изделия</option>
							<option value="4">Кабеленесущие системы</option>
							<option value="4">Бытовая техника крупная</option>
						</select>
					</div>


					<div class="goods-sl__body sl mb">
						<div class="goods-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="goods-sl__goods-sl sl-sw swiper">
							<div class="goods-sl__wrapper swiper-wrapper">
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a href="product.html" class="goods-sl__link">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Лампа 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>50 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>1351,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
								<article class="goods-sl__slide swiper-slide">
									<div class="goods-sl__span">
										<div class="goods-sl__sticker btn-1">Хит продаж</div>
										<button type="button" class="goods-sl__likes likes"></button>
									</div>
									<a class="goods-sl__link" href="product.html">
										<div class="goods-sl__image-ibc">
											<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
										</div>
										<h2 class="goods-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="goods-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
									</a>
									<div class="goods-sl__buy">
										<div class="goods-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="goods-sl__btn _icon-basket"></button>
									</div>
								</article>
							</div>
						</div>
					</div>

				</section>
				<section class="page-home__slider-popular">
					<div class="title-nav">
						<h2 class="title-nav__title">Товары месяца</h2>
						<select data-speed="500" data-pseudo-label="Выбрать категорию" name="form[3]" class="form">
							<option value="1">Кабели и провода</option>
							<option value="2">Светильники</option>
							<option value="3">Лампы</option>
							<option value="4">Электроустановочные изделия</option>
							<option value="4">Кабеленесущие системы</option>
							<option value="4">Бытовая техника крупная</option>
						</select>
					</div>


					<div class="popular-sl sl mb">
						<div class="popular-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="popular-sl__popular-sl sl-sw swiper">
							<div class="popular-sl__wrapper swiper-wrapper">
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
							</div>
						</div>
					</div>

				</section>
				<section class="page-home__about">
					<div class="about-bar">
						<div class="about-bar__text">
							<h2 hidden class="about-bar__title h3">О компании</h2>
							<p class="about-bar__p">Компания КС-ГРУПП была основана в 2013 году. Благодаря выверенным шагам, направленным на развитие партнерских отношений и высокому качеству инженерных услуг. Всего за несколько лет КС-ГРУПП сумела зарекомендовать себя в качестве надежного и проверенного партнера. На сегодняшний день ассортимент компании включает более 350 000 товарных позиций.</p>
							<p class="about-bar__p">На сегодняшний день ассортимент компании включает более 300 000 товарных позиций.</p>
						</div>
						<div class="about-bar__image-ibg"><picture><source data-srcset="/img/vacancies/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="/img/vacancies/1.jpg" alt="Изображение компании"></picture></div>
					</div>


				</section>
				<section class="page-home__links home-links mb">
					<ul class="home-links__items">
						<li data-watch data-watch-once class="home-links__item home-links__item_01 an">
							<picture><source data-srcset="/img/home/block-links/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-links__img" data-src="/img/home/block-links/1.jpg" alt="Изображение"></picture>
							<h3 class="home-links__title">Акции,<br>распродажи и <br> хиты продаж</h3>
							<div class="home-links__link">
								<a href="stocks.html" class="_icon-nextar">Смотреть</a>
							</div>
						</li>
						<li data-watch data-watch-once class="home-links__item home-links__item_02 an">
							<picture><source data-srcset="/img/home/block-links/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-links__img" data-src="/img/home/block-links/2.jpg" alt="Изображение"></picture>
							<h3 class="home-links__title">Быстрая доставка</h3>
							<div class="home-links__link">
								<a href="delivery.html" class="_icon-nextar">Подробнее</a>
							</div>
						</li>
						<li data-watch data-watch-once class="home-links__item home-links__item_03 an">
							<picture><source data-srcset="/img/home/block-links/4.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-links__img" data-src="/img/home/block-links/4.jpg" alt="Изображение"></picture>
							<h3 class="home-links__title">Проверка цен поставщика</h3>
							<div class="home-links__link">
								<a href="#" class="_icon-nextar">Оставить заявку</a>
							</div>
						</li>
						<li data-watch data-watch-once class="home-links__item home-links__item_04 an">
							<picture><source data-srcset="/img/home/block-links/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-links__img" data-src="/img/home/block-links/3.jpg" alt="Изображение"></picture>
							<h3 class="home-links__title">Электрощитовое оборудование</h3>
							<div class="home-links__link">
								<a href="electros.html" class="_icon-nextar">Смотреть</a>
							</div>
						</li>
					</ul>
				</section>
				<section class="page-home__slider-popular">
					<div class="sl-span">
						<h2 class="category-sl__title">Товары для ремонта</h2>
						<a href="catalogs.html" class="home-area__link">Перейти в каталог</a>
					</div>
					<div class="popular-sl sl mb">
						<div class="popular-sl__arrow sl-arrow _icon-bigar"></div>
						<div class="popular-sl__popular-sl sl-sw swiper">
							<div class="popular-sl__wrapper swiper-wrapper">
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Лампа ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/home/block-1/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/home/block-1/2.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
								<article class="popular-sl__slide swiper-slide">
									<a href="#" class="popular-sl__image-ibc">
										<picture><source data-srcset="/img/products/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/products/1.jpg" alt="Изображение товара"></picture>
									</a>
									<div class="popular-sl__content">
										<div class="popular-sl__span">
											<div class="popular-sl__sticker btn-1">Новинка</div>
											<button type="button" class="popular-sl__likes likes"></button>
										</div>
										<h2 class="popular-sl__name">Кабель ВВГп-нг(А) LS 2х2,5 ГОСТ СКЗ</h2>
										<div class="popular-sl__info m-txt">Есть в наличии: <span>303 шт</span></div>
										<div class="popular-sl__price"><span>51,55</span>₽/м</div>
										<button type="button" class="popular-sl__btn btn-2">В корзину</button>
									</div>
								</article>
							</div>
						</div>
					</div>

				</section>
				<section class="page-home__mark home-mark mb">
					<ul class="home-mark__list">
						<li data-watch data-watch-once class="home-mark__item an">
							<picture><source data-srcset="/img/home/block-mark/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-mark__img" data-src="/img/home/block-mark/1.jpg" alt="Изображение"></picture>
							<h3 class="home-mark__subtitle">Электрощитовое оборудование</h3>
							<div class="home-mark__btn"><a href="electros.html">Выбрать</a></div>
						</li>
						<li data-watch data-watch-once class="home-mark__item an">
							<picture><source data-srcset="/img/home/block-mark/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="home-mark__img" data-src="/img/home/block-mark/2.jpg" alt="Изображение"></picture>
							<h3 class="home-mark__subtitle">Кабели</h3>
							<div class="home-mark__btn home-mark__btn_2"><a href="category.html">Выбрать</a></div>
						</li>
					</ul>
				</section>
				<section class="page-home__sertificates">
					<div class="sertificates-sl sl mb">
						<h2 data-watch data-watch-once class="sertificates-sl__title h2">Сертификаты</h2>
						<div class="sertificates-sl__arrow sl-arrow _icon-bigar"></div>
						<div data-watch data-watch-once class="sertificates-sl__slider sl-sw swiper">
							<div class="sertificates-sl__wrapper swiper-wrapper">
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/1.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/2.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/3.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/4.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/4.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/1.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/2.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/2.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/3.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/3.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
								<div class="sertificates-sl__slide swiper-slide">
									<a href="#" class="sertificates-sl__image-ibg">
										<picture><source data-srcset="/img/about/4.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="swiper-lazy" data-src="/img/about/4.jpg" alt="Изображение сертификата"></picture>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>