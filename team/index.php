<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
		<main class="team-page">
			<section class="team-page__container">
				<h1 class="team-page__title"><?=GetMessage("TEAM")?></h1>
				<div class="team-page__text">
					<?=GetMessage("TEAM-TEXT")?>
				</div>
				<h2 class="team-page__subtitle"><?=GetMessage("MANAGEMENT")?></h2>
				<div class="team-page__subtext">
					<?=GetMessage("MANAGEMENT-TEXT")?>
				</div>
				<!--<div class="team-page__items">
					<a href="#" class="team-page__item">
						<div class="team-page__image"><img src="/img/team-page/1.jpg" alt="Сотрудник компании"></div>
						<div class="team-page__info">
							<div class="team-page__name">Имя Фамилия</div>
							<div class="team-page__job">Описание должности</div>
						</div>
					</a>
					<a href="#" class="team-page__item">
						<div class="team-page__image"><img src="/img/team-page/2.jpg" alt="Сотрудник компании"></div>
						<div class="team-page__info">
							<div class="team-page__name">Имя Фамилия</div>
							<div class="team-page__job">Описание должности</div>
						</div>
					</a>
					<a href="#" class="team-page__item">
						<div class="team-page__image"><img src="/img/team-page/3.jpg" alt="Сотрудник компании"></div>
						<div class="team-page__info">
							<div class="team-page__name">Имя Фамилия</div>
							<div class="team-page__job">Описание должности</div>
						</div>
					</a>
				</div>-->
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"team",
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
						"IBLOCK_ID" => "20",
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
						"PROPERTY_CODE" => array("","POSITION"),
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
			</section>
		</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>