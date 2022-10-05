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
		"ELEMENT_ID" => 70,
		"FIELD_CODE" => array("", ""),
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
		"PROPERTY_CODE" => array("", "TITLE_EN"),
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
        <section class="company-history">
         
            <div class="page-info">
                <div class="page-info-text">
                    <span>
                        <?=GetMessage("WEIGHT")?>
                    </span>
                </div>
            </div>

            <div class="block-right2">
                <div class="page-info2">
                    <div>
                        Примечание: «Производство в России нефтяного кокса продолжают расти. За 2016-2020 годы выпуск кокса нефтяного в России увеличился на 32% — с 3,40 млн т 
                        до 4,50 млн т. Это связано с выходом нефтеперерабатывающих заводов России 
                        на мировой рынок.»
                    </div>
                </div>
            </div>
        
            <div class="polimer-PMB1 container">
                <div class="polimer-PMB-text1">
                    Основными показателями качества кокса считаются
                </div>
            </div>
                
            <div class="polimer-conteiner-koks">
                <div class="container">
                    <div class="polimer-img">
                        <img src="/img/koks.png">
                    </div>
                    <div class="polimer-info">
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                01
                            </div>
                            <div class="polimer-info-text-a">
                                Массовая доля серы
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                02
                            </div>
                            <div class="polimer-info-text-a">
                                Зольность
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                03
                            </div>
                            <div class="polimer-info-text-a">
                                Влага (не более 3%)
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                04
                            </div>
                            <div class="polimer-info-text-a">
                                Выделение летучего вещества
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                05
                            </div>
                            <div class="polimer-info-text-a">
                                Размер гранул, прочность
                            </div>
                        </div>
                    </div>
                </div>
                <div class="black-line">
                </div>
            </div>

            <div class="polimer-PMB1">
                    <div class="polimer-PMB-text1 container">
                        В зависимости от состава и качества базового сырья, а также от техники переработки, можно получить несколько разновидностей кокса :
                    </div>
            </div>

            <div class="maint">
                <div class="fbl">
                    
                    <div class="st">
                        <div>
                            Нефтяной кокс
                        </div>
                    </div>
                    <div class="st">
                        <div>
                            Имеет низкую зольность до 0,8 %. Нефтяную разновидность получают посредством пиролиза и крекинга<br> жидких отходов нефтеперерабатывающей промышленности
                        </div>
                    </div>

                </div>

                <div class="fbl">
                    
                    <div class="st">
                        <div>
                            Электродный пековый 

                        </div>
                    </div>
                    <div class="st">
                        <div>
                            По техническим характеристикам достаточно близок нефтяному коксу. Зольность данной разновидности<br> не превышает 0,3%. Электродный пековый кокс – это результат коксования каменноугольного пека<br> в условиях высокого температурного режима
                        </div>
                    </div>

                </div>

                <div class="fbl">
                    
                    <div class="st">
                        <div>
                            Каменноугольный кокс
                        </div>
                    </div>
                    <div class="st">
                        <div>
                            Одна из самых распространенных разновидностей. В зависимости от качества (химического состава)<br> исходного сырья и принципа коксования каменного угля выделяют доменный, литейный, бытовой и другие<br> узкоспециальные виды кокса
                        </div>
                    </div>
                </div>

            </div>

            <div class="polimer-PMB1-koks container">
                    <div class="polimer-PMB-text1">
                        Классификация и область применение кокса
                    </div>
            </div>

            <div class="polimer-tesxt container">
                    <div class="pol-text1">
                        Малосернистые нефтяные коксы должны изготовляться в соответствии с требованиями настоящего стандарта по технологическому регламенту, утвержденному в установленном порядке.
                    </div>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "koks_table",
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
                    "IBLOCK_ID" => "13",
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
                    "PROPERTY_CODE" => array("","HREF"),
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

            <div class="passport-block">
                <div class="passport-text">
                    <img src="/img/PdfFile.png">
                    <span>Паспорт качества продукци</span>
                    <img src="/img/DownloadIcon.png">
                </div>
            </div>

            <div class="logistics">
                <div class="container">
                    <div class="title-prewie logistics">
                        Особенности транспортировки кокса
                    </div>
                    <div class="text logistics">
                        Транспортировка нефтяного кокса осуществляется в полувагонах (норма загрузка 60 тонн, нетто) и морским видом транспорта танкерные поставки с портом России: порт Усть-Луга, 
                        порт Владивосток, порт Новороссийск.
                        Разные виды кокса имеют свои особенности. Это необходимо учитывать при транспортировке. Для контроля в сопроводительных документах проставляется марка кокса. Это позволяет произвести правильную перевозку груза. Коксовая мелочь может смерзнуться при низких температурах. 
                        Как правило, перевозка кокса осуществляется в одном направлении по замкнутой линии.
                    </div>
                    <div class="delivery-item">
                        <div class="curcle">
                            <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.1348 15.5C31.1348 24.0604 24.1651 31 15.5674 31C6.96977 31 0 24.0604 0 15.5C0 6.93959 6.96977 0 15.5674 0C24.1651 0 31.1348 6.93959 31.1348 15.5ZM7.41537 15.5C7.41537 19.9828 11.0652 23.6168 15.5674 23.6168C20.0697 23.6168 23.7195 19.9828 23.7195 15.5C23.7195 11.0172 20.0697 7.38325 15.5674 7.38325C11.0652 7.38325 7.41537 11.0172 7.41537 15.5Z" fill="#F9D119"></path>
                            </svg>
                        </div>

                        <div class="curcle">
                            <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.1348 15.5C31.1348 24.0604 24.1651 31 15.5674 31C6.96977 31 0 24.0604 0 15.5C0 6.93959 6.96977 0 15.5674 0C24.1651 0 31.1348 6.93959 31.1348 15.5ZM7.41537 15.5C7.41537 19.9828 11.0652 23.6168 15.5674 23.6168C20.0697 23.6168 23.7195 19.9828 23.7195 15.5C23.7195 11.0172 20.0697 7.38325 15.5674 7.38325C11.0652 7.38325 7.41537 11.0172 7.41537 15.5Z" fill="#F9D119"></path>
                            </svg>
                        </div>
                        <div class="curcle">
                            <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.1348 15.5C31.1348 24.0604 24.1651 31 15.5674 31C6.96977 31 0 24.0604 0 15.5C0 6.93959 6.96977 0 15.5674 0C24.1651 0 31.1348 6.93959 31.1348 15.5ZM7.41537 15.5C7.41537 19.9828 11.0652 23.6168 15.5674 23.6168C20.0697 23.6168 23.7195 19.9828 23.7195 15.5C23.7195 11.0172 20.0697 7.38325 15.5674 7.38325C11.0652 7.38325 7.41537 11.0172 7.41537 15.5Z" fill="#F9D119"></path>
                            </svg>
                        </div>
                        <div class="delivery-item-line">
                        </div>
                    </div>
                    <div class="delivery">
                        <div class="delivery-item-block">
                            <svg width="82" height="66" viewBox="0 0 82 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.48047" y="8.39844" width="79.0391" height="38.6786" rx="19.3393" stroke="#777777" stroke-width="2"></rect>
                                <path d="M14.0659 58.889C14.0659 62.4344 11.6821 65.0006 9.08961 65.0006C6.49716 65.0006 4.11328 62.4344 4.11328 58.889C4.11328 55.3436 6.49716 52.7773 9.08961 52.7773C11.6821 52.7773 14.0659 55.3436 14.0659 58.889Z" stroke="#777777" stroke-width="2"></path>
                                <path d="M26.0152 58.889C26.0152 62.4344 23.6313 65.0006 21.0388 65.0006C18.4464 65.0006 16.0625 62.4344 16.0625 58.889C16.0625 55.3436 18.4464 52.7773 21.0388 52.7773C23.6313 52.7773 26.0152 55.3436 26.0152 58.889Z" stroke="#777777" stroke-width="2"></path>
                                <path d="M67.0152 58.889C67.0152 62.4344 64.6313 65.0006 62.0388 65.0006C59.4464 65.0006 57.0625 62.4344 57.0625 58.889C57.0625 55.3436 59.4464 52.7773 62.0388 52.7773C64.6313 52.7773 67.0152 55.3436 67.0152 58.889Z" stroke="#777777" stroke-width="2"></path>
                                <path d="M78.9683 58.889C78.9683 62.4344 76.5844 65.0006 73.992 65.0006C71.3995 65.0006 69.0156 62.4344 69.0156 58.889C69.0156 55.3436 71.3995 52.7773 73.992 52.7773C76.5844 52.7773 78.9683 55.3436 78.9683 58.889Z" stroke="#777777" stroke-width="2"></path>
                                <rect x="1.48047" y="48.2246" width="79.0391" height="7.10291" fill="#FFFCFC" stroke="#777777" stroke-width="2"></rect>
                                <rect x="15.5625" y="1.35742" width="16.4509" height="2.12913" rx="1.06456" fill="#D9D9D9" stroke="#777777"></rect>
                                <rect x="47.8359" y="1.35742" width="16.4509" height="2.12913" rx="1.06456" fill="#D9D9D9" stroke="#777777"></rect>
                                <path d="M35.9736 26.0332C37.349 22.7621 40.1017 17.4992 40.9384 16.3613C42.0762 18.1392 46.8232 24.7531 47.2702 26.531C48.6471 32.007 44.8797 36.2028 41.1157 36.2028C37.6479 36.2028 33.9402 30.8691 35.9736 26.0332Z" stroke="#777777" stroke-width="2"></path>
                            </svg>
                            <div class="delivery-item-text">
                                Полувагон 60 тонн
                            </div>
                        </div>
                
                        <div class="delivery-item-block">
                            <svg width="141" height="67" viewBox="0 0 141 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M101.603 1C102.021 1 102.359 1.68744 102.359 2.53543V5.30472H105.789C106.206 5.30472 106.544 5.99215 106.544 6.84015C106.544 7.68815 106.206 8.37558 105.789 8.37558H105.266L106.292 18.9037H107.473C107.89 18.9037 108.228 19.5911 108.228 20.4391C108.228 21.2871 107.89 21.9746 107.473 21.9746H106.591L107.656 32.894H108.449V22.298C108.449 21.45 108.788 20.7626 109.205 20.7626H113.405V19.2651C113.405 18.4171 113.743 17.7297 114.16 17.7297C114.577 17.7297 114.916 18.4171 114.916 19.2651V20.8326C115.222 21.028 115.445 21.6102 115.445 22.298V32.894H118.827C119.244 32.894 119.582 33.5815 119.582 34.4295V38.9129C119.582 39.0651 119.571 39.2122 119.551 39.3511H123.796V27.6789C123.796 26.8309 124.135 26.1435 124.552 26.1435C124.969 26.1435 125.307 26.8309 125.307 27.6789V39.3511H128.256C128.48 39.3511 128.692 39.5527 128.836 39.9015C128.98 40.2503 129.04 40.7105 129 41.1581L128.39 48.0584H130.917V45.3869C130.917 44.5389 131.255 43.8515 131.672 43.8515C132.09 43.8515 132.428 44.5389 132.428 45.3869V48.0584H135.858C136.275 48.0584 136.613 48.7458 136.613 49.5938V53.7327H138.745C139.02 53.7327 139.274 54.0383 139.407 54.53C139.54 55.0217 139.53 55.6212 139.381 56.0939L136.495 65.2904C136.356 65.7324 136.116 66 135.858 66H14.0425C13.8156 66 13.6007 65.7927 13.4572 65.4355L1.67021 36.0851C1.48573 35.6258 1.44788 34.9916 1.57297 34.4559C1.69806 33.9202 1.96374 33.5788 2.25548 33.5788H21.4883L35.319 53.7327H43.0192V49.5938C43.0192 48.7458 43.3575 48.0584 43.7747 48.0584H85.7758L85.1292 41.1745C85.087 40.7249 85.1456 40.2606 85.2891 39.9079C85.4327 39.5553 85.6461 39.3511 85.8713 39.3511H86.9921V36.6797C86.9921 35.8317 87.3303 35.1442 87.7476 35.1442C88.1648 35.1442 88.503 35.8317 88.503 36.6797V39.3511H90.3117V34.0082H90.0569C89.6396 34.0082 89.3014 33.3208 89.3014 32.4728V28.0702C89.3014 27.2222 89.6396 26.5348 90.0569 26.5348H97.1772C97.5944 26.5348 97.9327 27.2222 97.9327 28.0702V30.9374H99.9692L100.615 21.9746H99.8233C99.406 21.9746 99.0678 21.2871 99.0678 20.4391C99.0678 19.5911 99.406 18.9037 99.8233 18.9037H100.836L101.595 8.37558H100.882C100.464 8.37558 100.126 7.68815 100.126 6.84015C100.126 6.35027 100.239 5.91397 100.415 5.63283V5.17696C100.415 4.56343 100.592 4.03393 100.848 3.78804V2.53543C100.848 1.68744 101.186 1 101.603 1ZM44.5302 53.7327H135.102V51.1293H127.487C127.263 51.1293 127.051 50.9277 126.907 50.5789C126.764 50.2301 126.704 49.7699 126.743 49.3223L127.353 42.422H86.7846L87.4312 49.3059C87.4734 49.7554 87.4148 50.2198 87.2713 50.5725C87.1278 50.9251 86.9143 51.1293 86.6891 51.1293H44.5302V53.7327Z" stroke="#777777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div class="delivery-item-text">
                                Морской танкер <br> 2000 тонн
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>

            <div class="implementation">
                <div class="container">
                    <div class="implementation-item">
                        <div class="title-prewie implementation">
                            Реализация нефтяного кокса на экспорт  
                        </div>
                        <div class="text implementation">
                        Реализация нефтяного кокса производиться на контрактной основе, согласно Инкотермс 2010 и/или Инкотермс 2020. Заключить контракт на поставку Вы можете, заполнить образец заявки и направить на e-mail: info@bitum-rise.ru. и /или связаться с Департаментом трейдинга темных нефтепродуктов по телефону: +7 800 222-92-25 
                        </div>
                    </div>
                </div>
            </div>


            <div class="oil-products">
                <div class="container">
                    <div class="title-prewie oil-products">
                        Сегодня к реализации предлагаются следующие виды сырья и нефтепродуктов:
                    </div>
                    <div class="kinds">
                        <div class="kinds-item">
                            <div class="kinds-text">
                                Дизельное топливо
                            </div>  
                        </div>
                        <div class="kinds-item">
                            <div class="kinds-text">
                                Битумные
                                материалы
                            </div>
                        </div>
                        <div class="kinds-item">
                            <div class="kinds-text">
                                Газовый
                                конденсат
                            </div>
                        </div>
                        <div class="kinds-item">
                            <div class="kinds-text">
                                Нафта
                            </div>    
                        </div>
                        <div class="kinds-item">
                            <div class="kinds-text">
                                Кокс
                                нефтяной
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>