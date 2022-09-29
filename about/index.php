<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>

<main class="container">
    <div class="about-page">
        <div class="about-title">
            <h1><?=GetMessage("WELCOME")?></h1>
        </div>
        <div class="about-text-block">
            <div class="about-text-grid">
                <div class="about-text-img about-text-img-first">

                </div>
                <div class="about-text">
                    <b>RISE OIL GROUP</b> – трейдер нефти и нефтепродуктов.  Мы входим в число наиболее эффективных и лидирующих энергетических компаний в странах присутствия и активно способствуем развитию мировой энергетической отрасли.  Наши департаменты по закупкам, продажам, финансам и логистике формируют прочные отношения между производителями и конечными потребителями и делают цепочки поставок более эффективными, безопасными и устойчивыми.
                </div>
            </div>
            <div class="about-text-head">
                Что мы делаем
            </div>
            <div class="about-text-grid">
                <div class="about-text">
                    <b>RISE OIL GROUP</b>  поставляет нефть и нефтепродукты. Обладая логистическими и складскими возможностями, мы ежедневно совершаем торговые операции ответственно по всему миру.
                    Наши специалисты по торговле нефти и нефтепродуктами обладают компетентными знаниями и опытом на рынках присутствия, поддержив. долгосрочные отношения с – клиентами и партнерами. 
                    RISE OIL GROUP реализует и производит современные... <a href="">Раскрыть</a>
                </div>
                <div class="about-text-img">
                
                </div>
            </div>
            <div class="about-text-grid">
                <div class="about-text-img">
                
                </div>
                <div class="about-text">
                    <div class="about-text-head">
                        Наше видение
                    </div>
                    Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                    Мы стараемся делать это быстро и ответственно.
                    Забота о Партнерах и клиентах является для компании приоритетной задачей, Мы берем полную ответственность за качество наших услуг в соответствии с Международными стандартами.
                </div>
            </div>
        </div>            
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_partners",
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
    </div>
    <div class="about-preview">
        <div class="about-preview-item">
            <div class="preview-item-head">
                <?=GetMessage("HOLDING_STRUCTURE")?>
            </div>
            <div class="preview-item-text">
                Наши торговые офисы располагаются в ключевых точках по всему миру в Дубай ОАЭ, России, Кыргызстане, Узбекистане, Грузии
            </div>
        </div>
        <div class="about-preview-item">
            <div class="preview-item-head">
                Инвестиции
            </div>
            <div class="preview-item-text">
                Мы инвестируем в энергетические активы, которые дополняют наше положение в центре мировых энергетических рынков и облегчают поток энергии с ключевых рынков по всему миру и через них
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "about_productions",
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
            "IBLOCK_ID" => "14",
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
<main>
    <div class="about-description-block">
        <div class="about-description">
            <div class="about-description-item left">
                Светлые нефтепродукты
            </div>
            <div class="about-description-item">
                Битумные материалы
            </div>
            <div class="about-description-item left">
                LPG
            </div>
            <div class="about-description-item">
                Бензин газовый стабильный
            </div>
            <div class="about-description-item left">
                Нефтяной кокс
            </div>
        
        </div>
        <div class="left-background">
        </div>
        <div class="right-background">
        </div>
    </div>
    <div class="about-save">
        <div class="about-partners-head">
            Хранение
        </div>
        <div class="save-text">
            Оптимальное расположение нефтяных терминалов и складских возможностей, обеспечивают прочность торговых операций. Это позволяют нам своевременно удовлетворять потребности наших клиентов… 
        </div>
    </div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>