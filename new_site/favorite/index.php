<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?>
    <main class="page page-favorite">
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
        <div class="page-favorite__container">
            <nav class="nav">
                <ul class="nav__list m-txt">
                    <li class="nav__item"><a href="index.html" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Акции</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Акция</a></li>
                </ul>
            </nav>
            <section class="page-favorite__main favorite-main">
                <h1 class="favorite-main__title h">Избранное</h1>
                <div class="favorite-main__alert alert">
                    <span>
                        <p class="alert__text _icon-info">Стоимость товаров может меняться из-за изменения цен у поставщиков. Оформите заказ, чтобы зафиксировать цену.</p>
                    </span>
                    <button type="button" class="alert__close _icon-close card-delete"></button>
                </div>
                <div class="favorite-main__basket favorite-basket">
                    <nav class="favorite-basket__sorting">
                        <ul class="favorite-basket__sorting-list">
                            <li class="favorite-basket__sorting-label">Сортировать по:</li>
                            <li class="favorite-basket__sorting-tag _sorting-active">Дате обновления</li>
                            <li class="favorite-basket__sorting-tag">Возрастанию цены</li>
                            <li class="favorite-basket__sorting-tag">Убыванию цены</li>
                            <li class="favorite-basket__sorting-tag">Отзывам</li>
                        </ul>
                    </nav>
                    <ul class="favorite-basket__items">
                        <li class="favorite-basket__item favorite-item">
                            <a href="" class="favorite-item__image-ibc"><picture><source data-srcset="img/favorite/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/favorite/1.jpg" alt="Изображение товара"></picture></a>
                            <div class="favorite-item__content">
                                <h3 class="favorite-item__name">Светильник N-212-E27-40W-BK настол. черн. ЭРА Б0035058</h3>
                                <div class="favorite-item__price">519.60 <span>₽</span></div>
                                <button type="button" class="favorite-item__btn btn-2">В корзину</button>
                            </div>
                            <button type="button" class="favorite-item__btn-close _icon-close card-delete"></button>
                        </li>
                        <li class="favorite-basket__item favorite-item">
                            <a href="" class="favorite-item__image-ibc"><picture><source data-srcset="img/favorite/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/favorite/1.jpg" alt="Изображение товара"></picture></a>
                            <div class="favorite-item__content">
                                <h3 class="favorite-item__name">Светильник N-212</h3>
                                <div class="favorite-item__price">519.60 <span>₽</span></div>
                                <button type="button" class="favorite-item__btn btn-2">В корзину</button>
                            </div>
                            <button type="button" class="favorite-item__btn-close _icon-close card-delete"></button>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>