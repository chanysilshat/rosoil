<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"banner_page",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => 163,
		"FIELD_CODE" => array("", "TITLE_RU"),
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("", "TITLE_RU"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>
        <main class="main">  
            
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "history_list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("",""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "28",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        "VALUES", 
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
            <section class="company-history">
             

            <div class="section-info-1">

                <div class="section-info">
                    <div class="left-info">
                        <p>2008г.</p>
                    </div>
                    <div class="right-info">
                        <p>Создана компания под брендом «Дорожные Системы» для обеспечения битумными материалами дорожные компании Республики Башкортостан, Челябинской, Свердловской, Пермской областях, ХМАО, ЯНАО</p>
                        <img src="/img/p_ufa_panorama_krasivie_foto.png" alt="">
                    </div>
                </div>

            </div>
            

            <div class="section-info-1">
                <div class="section-info-linear">
                    <div class="left-info-linear">
                        <p>2012г.</p>
                    </div>
                    <div class="right-info">
                        <div class="right-info-topp">
                            <p>Для снабжения Северного и  Дальневосточного Федерального округа России организованна линия по разливу битумных материалов в металлические бочки и биг-бэги.</p>
                        </div>
                        <div class="right-info-bottom1">
                            <span class="right-info1"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2013г.</p>
                    </div>
                    <div class="right-info">
                        <p>В рамках сотрудничества с дорожно-строительными компании Кыргызской Республики и развития региона заключены поставки на поставку дорожного битума марки БНД 60/90 ГОСТ 22245-90, фасованного в металлические бочки в колличестве 7000 тонн.</p>
                        <img src="/img/road-construction.png" alt="">
                    </div>
                </div>
            </div>

            <div class="section-info-1">
                <div class="section-info-linear">
                    <div class="left-info-linear">
                        <p>2014г.</p>
                    </div>
                    <div class="right-info">
                        <div class="right-info-topp">
                            <p>Компания ООО «Райс Битум» начала поставку битумных материалов на крупные дорожно- строительные объекты в Республике Крым.<br><br>ООО «Райс Битум» активно расширяет свое присутствие в Монголии.<br><br>Заключен первый контракт на поставку дорожного битума марки БНД 90/130 ГОСТ 22245-90 в колличестве 3500 тонн в г. Улан-Батор.<br><br>Компания развивает свое присутствие в Республике Таджикистан.<br><br>Подписан контракт на поставку дорожного битума марки БНД 60/90 ГОСТ 22245-90 в колличестве 3500 тонн на станцию Худжанд.</p>
                        </div>
                        <div class="right-info-bottom1">
                            <span class="right-info1"></span>
                        </div>
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2015г.</p>
                    </div>
                    <div class="right-info">
                        <p>Организовано производство холодного асфальта в мешках по 30 кг.<br><br>Заключены договоры с подрядными компаниями ПАО «Транснефть», ПАО «Газпромнефть» на поставку холодного асфальта для ямочного ремонта дорожного покрытия  и для устройства гидрофобного слоя в нефтеналивных терминалах в зимний период времени.<br><br>Поставки полимерно-битумных вяжущих марки ПБВ 90 в Центральную часть России для строительства Федеральной трассы М-7.<br><br></p>
                        <img src="/img/cold-asphalt.png" alt="">
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2016г.</p>
                    </div>
                    <div class="right-info">
                        <p>Заключены договоры с дорожно-строительными компаниями Крыма на поставку битумных материалов марок БНД, ПБВ. Строительство автомобильной дороги федерального значения Керчь-Симферополь-Севастополь по территории Крыма А-291 «Таврида»<br><br>Заключены договоры с дорожно-строительными компаниями Республики Саха Якутия, г. Магадан, Сахалинской области, Хабаровского края на поставку дорожного битума  БНД 90/130 ГОСТ 22245-90 в контейнерах.<br><br>Учреждение компании ОсОО «РОУД КГ» \ «ROAD KG» в Кыргызской Республике г. Бишкек.<br><br>Основная цель создания - оптовые поставки нефтепродуктов: дизельного топлива, автомобильных бензинов, битумных материалов в стараны Средней Азии и восточной Европы.</p>
                        <!-- <img src="/img/cold-asphalt.png" alt=""> -->
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2017г.</p>
                    </div>
                    <div class="right-info">
                        <p>Компания активно расширяет свое присутствие в Республике Узбекистан.<br><br>Подписан контракт с дорожно-строительными компаниями из г. Самарканд, г. Ташкент, г. Бухара, г. Карши, г.Джизак, г. Фергана на поставку дорожного битума марки БНД 60/90 ГОСТ 22245-90 в вагонах-цистернах для строительства дорох Федерального значения.<br><br></p>
                        <img src="/img/company.png" alt="">
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2018г.</p>
                    </div>
                    <div class="right-info">
                        <p>Компания расширяет свое присутствие в Юго-Восточной Европе.<br><br>Заключены контракты с трейдерскими компаниями из Молдавии и Румынии на поставку дорожного битума марки БНД 50/70 ГОСТ 33133-2014 и БНД 70/100 33133-2014 фасованный в биг-бэги. Учреждение компаний «RISE GEO» LLC в Грузии, г. Тбилиси.<br><br>Регистрация товарного знака «RISE OIL GROUP». «ROAD KG» LLC получил статус акредитованного партнера ПАО «НК«Роснефть»</p>
                        <!-- <img src="/img/company.png" alt=""> -->
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2019г.</p>
                    </div>
                    <div class="right-info">
                        <p>Подписано соглашение с китайской дорожной компанией «CRSG» на поставку крупной партии битумных вяжущих марок PG 70-22, PG 70-10 в Восточную Африку, порт Dar es Salaam для строительства межгосударственной Автомагистрами Танзания-Кения.<br><br>Вступление ООО «Раис Битум» в члены «Торгово-промышленной палаты Российской Фдерации» для развития межгосударственого сотрудничества.<br><br>Поставка полимерно-битумных вяжущих марки ПБВ 90 и ПБВ 130 для капитального ремонта автомобильной дороги А-350 «Чита - Забайкальск граница с Китайской Народной Республикой»<br><br>По данным ПАО Трансконтейнер, ООО «Райс Битум» стал победителем по колличеству перевезенных контейнеров в пределах Российской Федерации по Горьковской железной дороге.</p>
                        <img src="/img/CRSG.png" alt="">
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2020г.</p>
                    </div>
                    <div class="right-info">
                        <p>ООО «Раис Битум» присоединилась к Антикоррупционной хартии российского бизнеса и на добровольных началах работает совместно с «Торгово-Промышленной палатой Российской Федерации» над пресечением использования коррупционных практик.<br><br>ООО «Раис Битум» внесена в Реестр «Надежных партнеров в Российской Федерации».<br><br></p>
                        <img src="/img/regnum_picture.png" alt="">
                    </div>
                </div>
            </div>
                <span class="company-history-line"></span>
            <div class="section-info-1">
                <div class="section-info">
                    <div class="left-info">
                        <p>2021г.</p>
                    </div>
                    <div class="right-info">
                        <p>Группа Компаний расширяет свое присутствие в Грузии.<br><br>Подписан контракт на поставку битумных материалов г. Тбилиси на поставку дорожного битума марки БНД 60/90 ГОСТ 22245-90 в вагонах-цистернах.<br><br>Расширение территорий поставок Дизельного топлива и бензинов в Республику Узбекистан.<br><br>Создание «RISE OIL GROUP» FZE в ОАЭ - экспансия на международных рынках.<br><br></p>
                        <!-- <img src="/img/regnum_picture.png" alt=""> -->
                    </div>
                </div>
            </div>

            <div class="section-info-2">
                <!-- <div class="section-info-top"></div> -->
                <div class="section-info-bottom">
                    <div class="section-info-bottom-info">
                    <div class="left-info-bottom">
                        <p>2022г.</p>
                    </div>
                    <div class="right-info-bottom">
                        <p>Начато строительство нефтебазы (битумного терминала) ООО СП «RISE OIL TERMINAL» в Республике Узбекистан, г. Карши.<br><br>На территории 2 га планируется: прием и хранение светлых нефтепродуктов (дизельное топливо и бензин) и вязких битумных материалов в объеме 20 000 тонн.<br><br></p>
                        <!-- <img src="/img/regnum_picture.png" alt=""> -->
                    </div>
                    </div>
                </div>

            </div>

            </section>
  
        </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>