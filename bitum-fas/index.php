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
		"ELEMENT_ID" => 192,
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
<main class="bitum-fas-page">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"bitum-fas-table",
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
					"IBLOCK_ID" => "30",
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
	
			<section class="bitum-fas-page__block-3 bitum-fas-page-block-3">
				<div class="bitum-fas-page-block-3__container">
					<h2 data-watch data-watch-once data-watch-margin="200" class="bitum-fas-page-block-3__title">Доступные
						варианты упаковки фасованного
						битума</h2>
					<div class="bitum-fas-page-block-3__items">
						<div class="bitum-fas-page-block-3__item">
							<h3 class="bitum-fas-page-block-3__subtitle">Комбинированный складной контейнер КСК-У 1000</h3>
							<a href="#" class="bitum-fas-page-block-3__image"><img src="/img/bitum-fas-page/1.jpg" loading="lazy"
									alt="Фасовка битума">
							</a>
							<div class="bitum-fas-page-block-3__text">Комбинированный складной контейнер КСК-У1000 предназначен для
								хранения и дальней перевозки битумных материалов. Специально разработанный жесткий каркас гарантирует
								сохранность груза при транспортировке и хранении в 2 яруса. Непромокаемый, атмосферостойкий
								полипропиленовый ламинированный чехол позволяет хранить контейнер под открытым небом, без каких либо
								последствий.</div>
						</div>
						<div class="bitum-fas-page-block-3__item">
							<h3 class="bitum-fas-page-block-3__subtitle">Металлическая бочка с крышкой 200 кг</h3>
							<a href="#" class="bitum-fas-page-block-3__image"><img src="/img/bitum-fas-page/2.jpg" loading="lazy"
									alt="Фасовка битума">
							</a>
							<div class="bitum-fas-page-block-3__text">Металлическая бочка с крышкой. Один из надежных способов
								хранения и транспортировки.</div>
						</div>
						<div class="bitum-fas-page-block-3__item">
							<h3 class="bitum-fas-page-block-3__subtitle">Комбинированный складной контейнер КСК-У 1000</h3>
							<a href="#" class="bitum-fas-page-block-3__image"><img src="/img/bitum-fas-page/3.jpg" loading="lazy"
									alt="Фасовка битума">
							</a>
							<div class="bitum-fas-page-block-3__text">Комбинированный складной контейнер КСК-У1000 предназначен для
								хранения и дальней перевозки битумных материалов. Специально разработанный жесткий каркас гарантирует
								сохранность груза при транспортировке и хранении в 2 яруса. Непромокаемый, атмосферостойкий
								полипропиленовый чехол позволяет ламинированный чехол позволяет ламинированный чехол
								позволяет хранить контейнер под
								открытым небом, без каких либо
								последствий.</div>
						</div>
					</div>
				</div>
			</section>
			<section class="bitum-fas-page__block-4 bitum-fas-page-block-4">
				<div class="bitum-fas-page-block-4__container">
					<h2 class="bitum-fas-page-block-4__title">Логистика фасованного битума</h2>
					<div class="bitum-fas-page-block-4__decoration bitum-fas-page-block-4__decoration_01">
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
					</div>
					<div class="bitum-fas-page-block-4__items bitum-fas-page-block-4__items_01">
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/1.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Контроль на всех стадиях логистической цепочки</div>
						</div>
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/2.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Сохранение качества в процессе транспортировки</div>
						</div>
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/3.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Приоритетное обеспечение битумными материалами</div>
						</div>
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/4.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Стабильные поставки с 24 битумных производств</div>
						</div>
					</div>
					<div class="bitum-fas-page-block-4__decoration bitum-fas-page-block-4__decoration_02">
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
						<div class="bitum-fas-page-block-4__decoration_circle-big">
							<div class="bitum-fas-page-block-4__decoration_circle-small"></div>
						</div>
					</div>
					<div class="bitum-fas-page-block-4__items bitum-fas-page-block-4__items_02">
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/5.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Крытые вагоны 63 тн.</div>
						</div>
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/6.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Морской танкер от 3000-30000 тонн</div>
						</div>
						<div class="bitum-fas-page-block-4__item">
							<div class="bitum-fas-page-block-4__image"><img src="/img/bitum-fas-page/block-4/7.svg" loading="lazy"
									alt="Формы отгрузки">
							</div>
							<div class="bitum-fas-page-block-4__info">Еврофуры <br> 20 тн.</div>
						</div>
					</div>
				</div>
			</section>
			<section class="bitum-fas-page__block-5 bitum-fas-page-block-5">
				<div class="bitum-fas-page-block-5__container">
					<div class="bitum-fas-page-block-5__map">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(),
							false
							);?>
					
					</div>
				</div>
			</section>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"bitum-fas-list",
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
					"IBLOCK_ID" => "31",
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
			<section class="bitum-fas-page__block-7 bitum-fas-page-block-7">
				<div class="bitum-fas-page-block-7__container">
					<h2 class="bitum-fas-page-block-7__title">Купить битум дорожный</h2>
					<div class="bitum-fas-page-block-7__text">Реализация битумных материалов производиться на контрактной основе,
						согласно Инкотермс 2010 и/или Инкотермс 2020. Заключить контракт на поставку Вы можете, заполнить образец
						заявки и направить
						на e-mail: <a href="mailto:info@bitum-rise.ru">info@bitum-rise.ru.</a> и
						/или связаться с Департаментом трейдингасветлых нефтепродуктов по
						телефону: <a href="tel:78002229225">+7 800 222 9225</a></div>
					<div class="bitum-fas-page-block-7__form-request-container">
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
				</div>
			</section>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"bitum-fas-video",
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
					"IBLOCK_ID" => "32",
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
			<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"bitum-fas_gallery",
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
				"IBLOCK_ID" => "33",
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
			));
			?>
		
		</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>