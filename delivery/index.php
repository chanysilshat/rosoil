<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизельное топливо");
?>
    <main class="main">  
        <section class="delivery-c">
            <div class="container">
                <h1 class="delivery-title">Опыт поставок</h1>
                <div class="delivery-wrapper">
                    <div class="delivery-item-c">
                        <img src="/img/delivery1.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка холодного асфальта в Монголию. Города Улан-Батор и Баян-Улгий
                            </p>
                        </div> 
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery2.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Узбекистан. Город Самарканд
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery3.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Кыргызстан. Город Бишкек
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery4.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Комплексные поставки в Республику Крым
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery5.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Срочная поставка битума БНД 60/90 в Таджикистан. Аэропорт «Куляб»
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery6.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Кыргызстан. Строительство дороги к озеру Иссык-Куль
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery7.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Туркменистан, Худжанд
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery8.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Монголию. Central Asia
                            </p>
                        </div>
                    </div>
                    <div class="delivery-item-c">
                        <img src="/img/delivery9.jpg" alt="">
                        <div class="delivery-descr">
                            <p>
                                Поставка БНД 60/90 в Бразилию, порт Santos
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news",
        "delivery",
        Array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_FIELD_CODE" => array("",""),
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PROPERTY_CODE" => array("","NAME_EN"),
            "DETAIL_SET_CANONICAL_URL" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "LIST_FIELD_CODE" => array("","DATE_CREATE"),
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "9",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_PROPERTY_CODE" => array("","NAME_EN"),
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "NEWS_COUNT" => "9999999999999999999999999999999999999999999",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PREVIEW_TRUNCATE_LEN" => "",
            "SEF_FOLDER" => "/news/",
            "SEF_MODE" => "Y",
            "SEF_URL_TEMPLATES" => Array(
                "detail" => "#ELEMENT_CODE#/",
                "news" => "",
                "section" => ""
            ),
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_RATING" => "N",
            "USE_RSS" => "N",
            "USE_SEARCH" => "N",
            "USE_SHARE" => "N",
            "VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
        )
    );?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>