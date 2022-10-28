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
		"ELEMENT_ID" => 190,
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
    <main class="bitum-page">
		<section class="bitum-page__block-2 bitum-page-block-2">
			<div class="bitum-page-block-2__container">
				<div class="bitum-page-block-2__text">
					<p>
						Битум - это твердый или смолоподобный продукт, смесь углеводородов и их азотистых, кислородистых,
						сернистых
						и металлосодержащих производных
						Битум Нефтяной Дорожный используется для производства горячих и холодных асфальтобетонных смесей, битумных
						эмульсий, дорожных мастик и других продуктов дорожной отрасли.
						БНД расшифровывается как битум нефтяной дорожный. Это специализированная марка, предназначенная для
						изготовления дорожного покрытия. Такой вид битума имеет высокую температуру размягчения, большую
						пенетрацию
						и низкую температуру хрупкости. За счет этого асфальт получается устойчивым к перепадам температур и
						нагрузкам.
					</p>
				</div>
			</div>
		</section>
		<section class="bitum-page__block-3 bitum-page-block-3">
			<div class="bitum-page-block-3__container">
				<h2 class="bitum-page-block-3__title">Классификация битумных материалов по маркам</h2>
				<div class="bitum-page-block-3__items">
					<div class="bitum-page-block-3__item">
						<h3 class="bitum-page-block-3__subtitle">ГОСТ 22245-90</h3>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 40/60</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 60/90</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 90/130</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 130/200</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 200/300</div>
					</div>
					<div class="bitum-page-block-3__item">
						<h3 class="bitum-page-block-3__subtitle">ГОСТ 33133-2014</h3>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 50/70</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 70/100</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 100/130</div>
					</div>
					<div class="bitum-page-block-3__item">
						<h3 class="bitum-page-block-3__subtitle">Европейский стандарт По EN12591</h3>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 50/70</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 70/100</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 100/150</div>
						<div class="bitum-page-block-3__name">Битум нефтяной дорожный БНД 160/220</div>
					</div>
				</div>
			</div>
		</section>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"bitum_table",
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
				"IBLOCK_ID" => "23",
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
		<section class="bitum-page__block-5 bitum-page-block-5">
			<div class="bitum-page-block-5__container">
				<div class="bitum-page-block-5__top-text">
					<p>
						В зависимости от приведенных выше показателей разные марки вязких дорожных битумов используются для
						создания
						дорожного покрытия в тех или иных регионах. От характеристик зависит, насколько прочным и долговечным
						будет
						асфальт. Эксперты дают следующие рекомендации:
					</p>
				</div>
				<div class="bitum-page-block-5__items">
					<div data-watch data-watch-once data-watch-margin="100" class="bitum-page-block-5__item">
						<h3 class="bitum-page-block-5__title">БНД 35/50, БНД 40/60, БНД 50/70 </h3>
						<div class="bitum-page-block-5__text">идеально подходит для теплых регионов с летней температурой выше 35
							°С. Он хорошо выдерживает высокие температуры и не размягчается, в то же время температура хрупкости
							достаточно высокая, поэтому покрытие обладает низкой морозостойкостью.</div>
					</div>
					<div data-watch data-watch-once data-watch-margin="100" class="bitum-page-block-5__item">
						<h3 class="bitum-page-block-5__title">БНД 130/200</h3>
						<div class="bitum-page-block-5__text">подходит для укладки в регионах с умеренным и холодным климатом.
						</div>
					</div>
					<div data-watch data-watch-once data-watch-margin="100" class="bitum-page-block-5__item">
						<h3 class="bitum-page-block-5__title">БНД 60/90, БНД 70/100</h3>
						<div class="bitum-page-block-5__text">также преимущественно используется в регионах с теплым климатом.
						</div>
					</div>
					<div data-watch data-watch-once data-watch-margin="100" class="bitum-page-block-5__item">
						<h3 class="bitum-page-block-5__title">БНД 200/300</h3>
						<div class="bitum-page-block-5__text">применяется преимущественно в районах с большими минусами осенью,
							зимой и весной (среднемесячная температура до -20 °С), поскольку обладает самой высокой морозостойкостью
							и не растрескивается под воздействием отрицательных температур.</div>
					</div>
					<div class="bitum-page-block-5__item">
						<h3 class="bitum-page-block-5__title">БНД 90/130, БНД 100/130</h3>
						<div class="bitum-page-block-5__text">самая универсальная марка битума. Его можно использовать практически
							во всех регионах России. Еще один плюс — возможность проведения дорожных работ в холодное время года.
							Рабочая температура смеси составит от -20 до +7 °С.</div>
					</div>
				</div>
			</div>
			<div class="bitum-page-block-5__passport">
				<a href="#" class="bitum-page-block-5__passport-link"><span>Паспорт качества продукци</span></a>
			</div>
		</section>
		<section class="bitum-page__block-6 bitum-page-block-6">
			<h2 class="bitum-page-block-6__title">Важнейшими характеристиками битума являются</h2>
			<div class="bitum-page-block-6__row-1">
				<div class="bitum-page-block-6__container">
					<div class="bitum-page-block-6__item">
						<h3 class="bitum-page-block-6__subtitle">ПЕНЕТРАЦИЯ</h3>
						<div class="bitum-page-block-6__text"> - показатель, указывающий на твердость. Определяется при погружении
							иглы с определенным усилием при температуре нагрева.</div>
					</div>
					<div class="bitum-page-block-6__item">
						<h3 class="bitum-page-block-6__subtitle">ТЕМПЕРАТУРА РАЗМЯГЧЕНИЯ</h3>
						<div class="bitum-page-block-6__text"> - позволяет выявить предельную температуру использования конкретной
							марки. Проверяется при помощи шарика, который кладут на поверхность, постепенно растапливая материал.
						</div>
					</div>
				</div>
			</div>
			<div class="bitum-page-block-6__row-2">
				<div class="bitum-page-block-6__container">
					<div class="bitum-page-block-6__item">
						<h3 class="bitum-page-block-6__subtitle">ПЛАСТИЧНОСТЬ</h3>
						<div class="bitum-page-block-6__text"> - характеризует растяжимость, измеряемую при помощи дуктилометра.
							Испытание проводят при скорости растяжения 5 см/мин и температурах 25 и 0 °С.</div>
					</div>
					<div class="bitum-page-block-6__item">
						<h3 class="bitum-page-block-6__subtitle">ТЕМПЕРАТУРА ХРУПКОСТИ</h3>
						<div class="bitum-page-block-6__text"> - демонстрирует нижний предел использования. На стальную пластину
							наносится тонкий слой битума, после чего она сгибается при различных температурах. При появлении первой
							трещины определяется температура хрупкости.
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bitum-page__block-7 bitum-page-block-7">
			<div class="bitum-page-block-7__container">
				<h2 class="bitum-page-block-7__title">СТРАНЫ ПРИСУТСТВИЯ</h2>
				<div class="bitum-page-block-7__map">
			
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(),
						false
						);?>
				</div>
			</div>
		</section>
		<section class="bitum-page__block-8 bitum-page-block-8">
			<div class="bitum-page-block-8__container">
				<h2 class="bitum-page-block-8__title">Логистика битумных материалов</h2>
				<div class="bitum-page-block-8__text">Поставки битумных материалов осуществляются согласно ИНКОТЕРМС 2010
					и/или ИНКОТЕРМС 2020 (с последующими изменениями и дополнениями): FCA, CPT, CIP, DAT, DAP, FAS, FOB, CFR,
					CIF </div>
				<div class="bitum-page-block-8__decoration">
					<div class="bitum-page-block-8__decoration_circle-big">
						<div class="bitum-page-block-8__decoration_circle-small"></div>
					</div>
					<div class="bitum-page-block-8__decoration_circle-big">
						<div class="bitum-page-block-8__decoration_circle-small"></div>
					</div>
					<div class="bitum-page-block-8__decoration_circle-big">
						<div class="bitum-page-block-8__decoration_circle-small"></div>
					</div>
				</div>
				<div class="bitum-page-block-8__items">
					<div class="bitum-page-block-8__item">
						<div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-1.svg" alt="Формы отгрузки">
						</div>
						<div class="bitum-page-block-8__info">Вагон-цистерна 60 тонн</div>
					</div>
					<div class="bitum-page-block-8__item">
						<div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-2.svg" alt="Формы отгрузки">
						</div>
						<div class="bitum-page-block-8__info">Морской танкер 2000 тонн</div>
					</div>
					<div class="bitum-page-block-8__item">
						<div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-3.svg" alt="Формы отгрузки">
						</div>
						<div class="bitum-page-block-8__info">Автобензовоз 22 тонн</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bitum-page__block-9 bitum-page-block-9">
			<div class="bitum-page-block-9__container">
				<h2 class="bitum-page-block-9__title">Купить битум дорожный</h2>
				<div class="bitum-page-block-9__text">Реализация битумных материалов производиться на контрактной основе,
					согласно Инкотермс
					2010
					и/или Инкотермс 2020. Заключить контракт на поставку Вы можете, заполнить образец заявки и направить
					на e-mail: <a href="mailto:info@bitum-rise.ru">info@bitum-rise.ru.</a> и
					/или связаться с Департаментом трейдингасветлых нефтепродуктов по
					телефону: <a href="tel:78002229225">+7 800 222 9225</a></div>
				<div class="bitum-page-block-9__form-request-container">
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
			"bitum_gallery",
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
				"IBLOCK_ID" => "27",
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
			
	</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>