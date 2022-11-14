<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
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
		"ELEMENT_ID" => 76,
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
    <main class="bgs-page">
        <section class="bgs-page__block-2 bgs-page-block-2">
            <div class="bgs-page-block-2__container"> 
                <div class="bgs-page-block-2__text">
                    <?=GetMessage("PETROL-TEXT")?>
                </div>
            </div>
        </section>
        <section class="bgs-page__block-3 bgs-page-block-3">
            <div class="bgs-page-block-3__container">
                <h2 class="bgs-page-block-3__title"><?=GetMessage("RECEIVING")?></h2>
                <div class="bgs-page-block-3__content">
                    <a href="#" class="bgs-page-block-3__image"><img src="/img/bgs-page/1.jpg" loading="lazy"
                            alt="Получение и сфера применения"></a>
                    <div class="bgs-page-block-3__subtext"><?=GetMessage("RECEIVING-TEXT")?></div>
                </div>
            </div>
        </section>
        <section class="bgs-page__block-4 bgs-page-block-4">
            <div class="bgs-page-block-4__container">
                <h2 class="bgs-page-block-4__title"><?=GetMessage("GAS-PETROL")?></h2>
                <ul class="bgs-page-block-4__items">
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">01</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("01")?>
                        </div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">02</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("02")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">03</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("03")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">04</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("04")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">05</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("05")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">06</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("06")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">07</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("07")?></div>
                    </li>
                    <li data-watch data-watch-once data-watch-margin="50" class="bgs-page-block-4__item">
                        <div class="bgs-page-block-4__number">08</div>
                        <div class="bgs-page-block-4__text"><?=GetMessage("08")?></div>
                    </li>
                </ul>
                <div class="bgs-page-block-4__info"><?=GetMessage("DIFFERENCES")?></div>
                <div class="bgs-page-block-4__passport">
                    <a href="http://rosoil.stt-corp.ru/passports/" target="_blank" class="bgs-page-block-4__passport-link"><?=GetMessage("PASPORT")?></a>
                </div>
            </div>
        </section>
        <section class="bgs-page__block-5 bgs-page-block-5">
            <div class="bgs-page-block-5__container">
                <h2 class="bgs-page-block-5__title"><?=GetMessage("SHIPPING-FORMS")?></h2>
                <div class="bgs-page-block-5__text"><?=GetMessage("COMPANY")?></div>
                <div class="bgs-page-block-5__decoration">
                    <div class="bgs-page-block-5__decoration_circle-big">
                        <div class="bgs-page-block-5__decoration_circle-small"></div>
                    </div>
                    <div class="bgs-page-block-5__decoration_circle-big">
                        <div class="bgs-page-block-5__decoration_circle-small"></div>
                    </div>
                    <div class="bgs-page-block-5__decoration_circle-big">
                        <div class="bgs-page-block-5__decoration_circle-small"></div>
                    </div>
                </div>
                <div class="bgs-page-block-5__items">

                    <div class="bgs-page-block-5__item">
                        <div class="bgs-page-block-5__image"><img src="/img/bgs-page/block-5-1.svg" loading="lazy" alt="Формы отгрузки"></div>
                        <div class="bgs-page-block-5__info"><?=GetMessage("TANK-CAR")?></div>
                    </div>
                    <div class="bgs-page-block-5__item">
                        <div class="bgs-page-block-5__image"><img src="/img/bgs-page/block-5-2.svg" loading="lazy" alt="Формы отгрузки"></div>
                        <div class="bgs-page-block-5__info"><?=GetMessage("SEA-TANKER")?></div>
                    </div>
                    <div class="bgs-page-block-5__item">
                        <div class="bgs-page-block-5__image"><img src="/img/bgs-page/block-5-3.svg" loading="lazy" alt="Формы отгрузки"></div>
                        <div class="bgs-page-block-5__info"><?=GetMessage("CAR-FUEL")?></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgs-page__block-6 bgs-page-block-6">
            <div class="bgs-page-block-6__container">
                <div class="bgs-page-block-6__text"><?=GetMessage("SALE")?></div>
                
            </div>
        </section>
    </main> 
    <div class="bgs-form">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/form.php"
            )
        );?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>