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
        <section class="main-page__block-3 block-3">
            <div class="block-3__container">
                <h2 class="block-3__title">О компании в цифрах</h2>
                <div class="block-3__body">
                    <div class="block-3__border-body">
                        <div class="block-3__item">
                            <div class="block-3__subtitle">БОЛЕЕ</div>
                            <div class="block-3__value">3000</div>
                            <div class="block-3__text">км дорог построено<br> С RISE GROUP</div>
                        </div>
                        <div class="block-3__item">
                            <div class="block-3__subtitle">ЗАКЛЮЧАЕМ</div>
                            <div class="block-3__value">236</div>
                            <div class="block-3__text">СДЕЛОК<br> ежегодно</div>
                        </div>
                        <div class="block-3__item">
                            <div class="block-3__subtitle">ОТГРУЖЕНО БОЛЕЕ</div>
                            <div class="block-3__value">700</div>
                            <div class="block-3__text">нефтепродуктов<br> и битумных материалов</div>
                        </div>
                        <div class="block-3__item">
                            <div class="block-3__subtitle">ПОСТАВКА ПРОДУКТА</div>
                            <div class="block-3__value">53</div>
                            <div class="block-3__text">субъекта <br>РОСИИ</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-page__block-4 block-4">
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
        </section>
        <section class="main-page__block-5 block-5">
            <div class="block-5__container">
                <h2 class="block-5__title">Минимальная партия поставки</h2>
                <div data-tabs="" class="block-5__tabs">
                    <nav data-tabs-titles="" class="block-5__navigation">
                        <button type="button" class="block-5__subtitle _tab-active">ЗАГОЛОВОК</button>
                        <button type="button" class="block-5__subtitle">ЗАГОЛОВОК</button>
                        <button type="button" class="block-5__subtitle">ЗАГОЛОВОК</button>
                    </nav>
                    <div data-tabs-body="" class="block-5__content">
                        <div class="block-5__body">
                            <div class="block-5__tab-item block-5-tab-item">
                                <a href="#" class="block-5-tab-item__image"><picture><source srcset="img/main-page/block-5/1-1.webp" type="image/webp"><img src="img/main-page/block-5/1-1.jpg" alt="Партия поставки"></picture></a>
                                <div class="block-5-tab-item_content">
                                    <div class="block-5-tab-item__text">И нет сомнений, что элементы политического процесса,
                                        инициированные исключительно синтетически, смешаны с не уникальными данными до степени совершенной
                                        неузнаваемости, из-за чего возрастает их статус бесполезности. Учитывая ключевые сценарии
                                        поведения</div>
                                    <div class="block-5-tab-item__indicators">
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">450K+</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.1M</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.6K</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">10%</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="block-5-tab-item__button">Связаться с нами</a>
                        </div>
                        <div class="block-5__body">
                            <div class="block-5__tab-item block-5-tab-item">
                                <a href="#" class="block-5-tab-item__image"><picture><source srcset="img/main-page/block-5/1-1.webp" type="image/webp"><img src="img/main-page/block-5/1-1.jpg" alt="Партия поставки"></picture></a>
                                <div class="block-5-tab-item_content">
                                    <div class="block-5-tab-item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                        nihil reiciendis autem qui fugit! Ex velit explicabo suscipit porro similique?</div>
                                    <div class="block-5-tab-item__indicators">
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">450K+</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.1M</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.6K</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">10%</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="block-5-tab-item__button">Связаться с нами</a>
                        </div>
                        <div class="block-5__body">
                            <div class="block-5__tab-item block-5-tab-item">
                                <a href="#" class="block-5-tab-item__image"><picture><source srcset="img/main-page/block-5/1-1.webp" type="image/webp"><img src="img/main-page/block-5/1-1.jpg" alt="Партия поставки"></picture></a>
                                <div class="block-5-tab-item_content">
                                    <div class="block-5-tab-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Reiciendis eveniet, id eligendi repellendus tenetur amet repellat ullam mollitia accusantium vitae
                                        dicta temporibus alias dolore deserunt! Recusandae modi nulla dolorem dolorum placeat vel voluptas
                                        minus voluptate asperiores! Iure, repellat amet, labore, odit ut ea accusamus numquam illum eaque
                                        aperiam laboriosam a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae,
                                        voluptates blanditiis consequuntur sed inventore minima placeat architecto, nisi cum optio
                                        officiis quod dolore quibusdam ab. Quae et reprehenderit incidunt.</div>
                                    <div class="block-5-tab-item__indicators">
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">450K+</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.1M</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">2.6K</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                        <div class="block-5-tab-item__indicator">
                                            <div class="block-5-tab-item__value">10%</div>
                                            <div class="block-5-tab-item__type">показатель</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="block-5-tab-item__button">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="main-page__block-8 block-8">
            <div class="block-8__container">
                <h2 class="block-8__title">Аккредитованный партнер</h2>
                <div class="block-8__slider swiper">
                    <div class="block-8__wrapper swiper-wrapper">
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/1-1.webp" type="image/webp"><img src="img/main-page/block-8/1-1.jpg" alt="Газпром нефть"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/2-1.webp" type="image/webp"><img src="img/main-page/block-8/2-1.jpg" alt="ОРСКНЕФТЕОРГСИНТЕЗ"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/3-1.webp" type="image/webp"><img src="img/main-page/block-8/3-1.jpg" alt="Лукойл"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/4-1.webp" type="image/webp"><img src="img/main-page/block-8/4-1.jpg" alt="ТПП Ресупблики Башкиртостан"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/5-1.webp" type="image/webp"><img src="img/main-page/block-8/5-1.jpg" alt="TNGIZT"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/6-1.webp" type="image/webp"><img src="img/main-page/block-8/6-1.jpg" alt="Башнефть"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/7-1.webp" type="image/webp"><img src="img/main-page/block-8/7-1.jpg" alt="Роснефть"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/7-1.webp" type="image/webp"><img src="img/main-page/block-8/7-1.jpg" alt="Роснефть"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/7-1.webp" type="image/webp"><img src="img/main-page/block-8/7-1.jpg" alt="Роснефть"></picture></a>
                        </div>
                        <div class="block-8__slide swiper-slide">
                            <a href="#" class="block-8__item"><picture><source srcset="img/main-page/block-8/7-1.webp" type="image/webp"><img src="img/main-page/block-8/7-1.jpg" alt="Роснефть"></picture></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-page__block-9 block-9">
            <h2 class="block-9__title">Блог компании</h2>
            <div class="block-9__items">
                <div class="block-9__container">
                    <div class="block-9__slider swiper">
                        <div class="block-9__wrapper swiper-wrapper">
                            <div class="block-9__slide swiper-slide">
                                <a href="#" class="block-9__item block-9-item">
                                    <div class="block-9-item__image-body">
                                        <picture><source srcset="img/main-page/block-9/1-1.webp" type="image/webp"><img src="img/main-page/block-9/1-1.jpg" alt="Читать далее"></picture>
                                        <div class="block-9-item__hashtags">
                                            <div class="block-9-item__hashtag">ХЭШТЭГ</div>
                                        </div>
                                    </div>
                                    <div class="block-9-item__date">08.08.2021</div>
                                    <h3 class="block-9-item__subtitle">Но перспективное планирование требует от нас</h3>
                                    <div class="block-9-item__text">Повседневная практика показывает, что реализация намеченных плановых
                                        заданий выявляет срочную потребность поставленных</div>
                                </a>
                            </div>
                            <div class="block-9__slide swiper-slide">
                                <a href="#" class="block-9__item block-9-item">
                                    <div class="block-9-item__image-body">
                                        <picture><source srcset="img/main-page/block-9/2-1.webp" type="image/webp"><img src="img/main-page/block-9/2-1.jpg" alt="Читать далее"></picture>
                                        <div class="block-9-item__hashtags">
                                            <div class="block-9-item__hashtag">ХЭШТЭГ</div>
                                        </div>
                                    </div>
                                    <div class="block-9-item__date">08.08.2021</div>
                                    <h3 class="block-9-item__subtitle">Разнообразный и богатый опыт говорит нам, что</h3>
                                    <div class="block-9-item__text">Есть над чем задуматься: ключевые особенности структуры проекта,
                                        инициированные исключительно синтетически, объявлены</div>
                                </a>
                            </div>
                            <div class="block-9__slide swiper-slide">
                                <a href="#" class="block-9__item block-9-item">
                                    <div class="block-9-item__image-body">
                                        <picture><source srcset="img/main-page/block-9/3-1.webp" type="image/webp"><img src="img/main-page/block-9/3-1.jpg" alt="Читать далее"></picture>
                                        <div class="block-9-item__hashtags">
                                            <div class="block-9-item__hashtag">ХЭШТЭГ</div>
                                        </div>
                                    </div>
                                    <div class="block-9-item__date">08.08.2021</div>
                                    <h3 class="block-9-item__subtitle">Предварительные выводы неутешительны: курс на</h3>
                                    <div class="block-9-item__text">А также независимые государства своевременно верифицированы. Идейные
                                        соображения высшего порядка, а также курс на</div>
                                </a>
                            </div>
                            <div class="block-9__slide swiper-slide">
                                <a href="#" class="block-9__item block-9-item">
                                    <div class="block-9-item__image-body">
                                        <picture><source srcset="img/main-page/block-9/1-1.webp" type="image/webp"><img src="img/main-page/block-9/1-1.jpg" alt="Читать далее"></picture>
                                        <div class="block-9-item__hashtags">
                                            <div class="block-9-item__hashtag">ХЭШТЭГ</div>
                                        </div>
                                    </div>
                                    <div class="block-9-item__date">08.08.2021</div>
                                    <h3 class="block-9-item__subtitle">Равным образом, выбранный нами</h3>
                                    <div class="block-9-item__text">В своём стремлении улучшить пользовательский опыт мы упускаем, что
                                        интерактивные прототипы, инициированные исключительно</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-page__block-10 block-10">
            <h2 class="block-10__title">Опыт поставок</h2>
            <div class="block-10__slider-top swiper">
                <div class="block-10__wrapper-top swiper-wrapper">
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/1-1.webp" type="image/webp"><img src="img/main-page/block-10/1-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/2-1.webp" type="image/webp"><img src="img/main-page/block-10/2-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/2-1.webp" type="image/webp"><img src="img/main-page/block-10/2-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/2-1.webp" type="image/webp"><img src="img/main-page/block-10/2-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/3-1.webp" type="image/webp"><img src="img/main-page/block-10/3-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/1-1.webp" type="image/webp"><img src="img/main-page/block-10/1-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/2-1.webp" type="image/webp"><img src="img/main-page/block-10/2-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-top swiper-slide">
                        <div class="block-10__slide-top-image"><picture><source srcset="img/main-page/block-10/3-1.webp" type="image/webp"><img src="img/main-page/block-10/3-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-top-info">
                            <h3 class="block-10__slide-top-subtitle">Заголовок</h3>
                            <div class="block-10__slide-top-text">Противоположная точка</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="block-10__slider-bottom swiper">
                <div class="block-10__wrapper-bottom swiper-wrapper">
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/4-1.webp" type="image/webp"><img src="img/main-page/block-10/4-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/5-1.webp" type="image/webp"><img src="img/main-page/block-10/5-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/6-1.webp" type="image/webp"><img src="img/main-page/block-10/6-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/7-1.webp" type="image/webp"><img src="img/main-page/block-10/7-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/8-1.webp" type="image/webp"><img src="img/main-page/block-10/8-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/4-1.webp" type="image/webp"><img src="img/main-page/block-10/4-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/5-1.webp" type="image/webp"><img src="img/main-page/block-10/5-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/6-1.webp" type="image/webp"><img src="img/main-page/block-10/6-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/7-1.webp" type="image/webp"><img src="img/main-page/block-10/7-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/8-1.webp" type="image/webp"><img src="img/main-page/block-10/8-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/5-1.webp" type="image/webp"><img src="img/main-page/block-10/5-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/6-1.webp" type="image/webp"><img src="img/main-page/block-10/6-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/7-1.webp" type="image/webp"><img src="img/main-page/block-10/7-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/8-1.webp" type="image/webp"><img src="img/main-page/block-10/8-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/5-1.webp" type="image/webp"><img src="img/main-page/block-10/5-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/6-1.webp" type="image/webp"><img src="img/main-page/block-10/6-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/7-1.webp" type="image/webp"><img src="img/main-page/block-10/7-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                    <a href="#" class="block-10__slide-bottom swiper-slide">
                        <div class="block-10__slide-bottom-image"><picture><source srcset="img/main-page/block-10/8-1.webp" type="image/webp"><img src="img/main-page/block-10/8-1.jpg" alt=""></picture></div>
                        <div class="block-10__slide-bottom-info">
                            <h4 class="block-10__slide-bottom-subtitle">Заголовок</h4>
                            <div class="block-10__slide-bottom-text">Противоположная точка</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
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