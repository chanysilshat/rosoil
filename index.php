<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main-page">

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "banner_index",
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
            "IBLOCK_ID" => "5",
            "IBLOCK_SECTION_ID" => "5",
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

        <section class="main-page__block-2 block-2">
            <div class="block-2__container">
                <div class="block-2__content">
                    <h2 data-da=".block-2,992,first" class="block-2__title">Заголовок</h2>
                    <div class="block-2__text">В своём стремлении повысить качество жизни, они забывают, что современная
                        методология разработки говорит о возможностях стандартных подходов. Имеется спорная точка зрения, гласящая
                        примерно следующее: реплицированные</div>
                    <a href="#" class="block-2__button">Перейти</a>
                </div>
                <div class="block-2__images">
                    <a href="#" class="block-2__image"><picture><source srcset="img/main-page/block-2/1-1.webp" type="image/webp"><img src="img/main-page/block-2/1-1.jpg" alt="Image"></picture></a>
                    <a href="#" class="block-2__image"><picture><source srcset="img/main-page/block-2/1-1.webp" type="image/webp"><img src="img/main-page/block-2/1-1.jpg" alt="Image"></picture></a>
                </div>
            </div>
        </section>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_company",
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
                "IBLOCK_ID" => "6",
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
                    "HEAD",
                    "VALUE", 
                    "FOOTER",
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
        
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "services_productions",
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
                "IBLOCK_ID" => "15",
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

        <!--<section class="main-page__block-4 block-4">
            <div class="block-4__container">
                <div class="block-4__header">
                    <h2 class="block-4__title">Услуги и продукты компании</h2>
                    <a data-da=".block-4__container,768,last" href="#" class="block-4__button">Посмотреть всё</a>
                </div>
                <div class="block-4__text">Вот вам яркий пример современных тенденций - сложившаяся структура
                    организации, а также свежий взгляд на привычные</div>
                <div data-tabs="" class="block-4__tabs block-4-tabs">
                    <nav data-tabs-titles="" class="block-4-tabs__navigation">
                        <button type="button" class="block-4-tabs__title _tab-active">Категория раздела</button>
                        <button type="button" class="block-4-tabs__title">Категория раздела</button>
                        <button type="button" class="block-4-tabs__title">Категория раздела</button>
                        <button type="button" class="block-4-tabs__title">Категория раздела</button>
                    </nav>
                    <div data-tabs-body="" class="block-4-tabs__content">
                        <div class="block-4-tabs__body">
                            <div class="block-4-tabs__slider swiper">
                                <div class="block-4-tabs__wrapper swiper-wrapper">
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/2-1.webp" type="image/webp"><img src="img/main-page/block-4/2-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/3-1.webp" type="image/webp"><img src="img/main-page/block-4/3-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-4-tabs__body">
                            <div class="block-4-tabs__slider swiper">
                                <div class="block-4-tabs__wrapper swiper-wrapper">
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/2-1.webp" type="image/webp"><img src="img/main-page/block-4/2-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/2-1.webp" type="image/webp"><img src="img/main-page/block-4/2-1.jpg" alt="Image"></picture></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-4-tabs__body">
                            <div class="block-4-tabs__slider swiper">
                                <div class="block-4-tabs__wrapper swiper-wrapper">
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/2-1.webp" type="image/webp"><img src="img/main-page/block-4/2-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/3-1.webp" type="image/webp"><img src="img/main-page/block-4/3-1.jpg" alt="Image"></picture></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-4-tabs__body">
                            <div class="block-4-tabs__slider swiper">
                                <div class="block-4-tabs__wrapper swiper-wrapper">
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/2-1.webp" type="image/webp"><img src="img/main-page/block-4/2-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/3-1.webp" type="image/webp"><img src="img/main-page/block-4/3-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                    <div class="block-4-tabs__slide swiper-slide">
                                        <a href="#" class="block-4-tabs__image"><picture><source srcset="img/main-page/block-4/1-1.webp" type="image/webp"><img src="img/main-page/block-4/1-1.jpg" alt="Image"></picture></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "min_supply",
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
                "IBLOCK_ID" => "7",
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
        <section class="main-page__block-6 block-6">
            <div class="block-6__container">
                <h2 class="block-6__title">Отправить заявку</h2>
                <form data-dev="" action="#" class="block-6__form">
                    <input data-required="" autocomplete="off" type="text" name="form[]" data-error="" placeholder="Имя" class="block-6__input">
                    <input data-required="" autocomplete="off" type="text" name="form[]" data-error="" placeholder="Телефон" class="block-6__input">
                    <button type="submit" class="block-6__button">Отправить</button>
                </form>
                <div class="block-6__privacy">
                    Отправляя заявку. вы соглашаетесь с <a href="#" class="block-6__privacy-link">политикой
                        конфиденциальности</a>
                </div>
                <div class="block-6__requests">
                    <a href="#" class="block-6__download">Скачать форму заявки</a>
                    <a href="#" class="block-6__upload">Прикрепить заявку</a>
                </div>
            </div>
        </section>
        <section class="main-page__block-7 block-7">
            <div class="block-7__container">
                <a href="#" class="block-7__link-title">
                    <h2 class="block-7__title">Как мы работаем</h2>
                </a>
                <div class="block-7__text">Наши люди – это сердце нашего бизнеса. Мы гордимся нашей меритократической рабочей
                    средой, созданной в атмосфере честности, этического поведения, равных возможностей и взаимного уважения. Мы
                    устанавливаем высокие стандарты для себя и наших партнеров в нашей повседневной деятельности.</div>
            </div>
        </section>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "partners",
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
                "IBLOCK_ID" => "8",
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
         <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "blog_slider",
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
                "IBLOCK_ID" => "9",
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
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "supply_experience",
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
                "IBLOCK_ID" => "10",
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
        <section class="main-page__block-11 block-11">
            <div class="block-11__container">
                <h2 class="block-11__title">Карта присутствия</h2>
                <div class="block-11__map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adf0b1d230290ffbace89c706a5ba42ffaea805093dd9118d327c3b33d704a46c&source=constructor" width="100%" height="520" frameborder="0"></iframe>
                </div>
            </div>
        </section>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>