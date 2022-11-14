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
                    <img src="/img/about-1.jpg" loading="lazy" alt="">

                </div>
                <div class="about-text">
                    <?=GetMessage("OIL-TRADER")?>
                </div>
            </div>
            <div class="about-text-grid about-text-grid-second">
                <div class="about-text">
                <div class="about-text-head">
                <?=GetMessage("WORK")?>
            </div>

                    <?=GetMessage("OIL-REPRESENTATION")?>
                </div>
                <div class="about-text-img">
                    <img src="/img/about-2.jpg" alt="">
                </div>
            </div>
            <div class="about-text-grid">
                <div class="about-text-img">
                    <img src="/img/about-3.jpg" loading="lazy" alt="">
                </div>
                <div class="about-text">
                    <div class="about-text-head">
                        <?=GetMessage("OUR-VISION")?>
                    </div>
                        <?=GetMessage("OUR-VISION-TEXT")?>
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
                <?=GetMessage("HOLDING_STRUCTURE-TEXT")?>
            </div>
        </div>
        <div class="about-preview-item">
            <div class="preview-item-head">
                <?=GetMessage("INVESTMENTS")?>
            </div>
            <div class="preview-item-text">
                <?=GetMessage("INVESTMENTS-TEXT")?>
            </div>
        </div>
    </div>
   
    

</main>
<main>
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
    <!--<div class="about-description-block">
        <div class="about-description">
            <div class="about-description-item left">
                LPG
            </div>
            <div class="about-description-item">
                <a href="#"><?=GetMessage("Aviation-fuel")?></a>
            </div>
            <div class="about-description-item left">
                <a href=""><?=GetMessage("BGS")?></a>
            </div>
            <div class="about-description-item">
                <a href=""><?=GetMessage("Diesel-fuel")?></a>
            </div>
            <div class="about-description-item left">
                <a href=""><?=GetMessage("PETROLEUM-COKE")?></a>
            </div>
            <div class="about-description-item">
                <a href=""><?=GetMessage("fuel-oil")?></a>
            </div>
            <div class="about-description-item-bitumen">
                <?=GetMessage("BITUMEN")?>
            </div>
        </div>
        <div class="about-description-block-bottom">
            <div class="left-background"></div>
            <div class="right-background">
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Битум нефтяной дорожный БНД</a>
                </div>
                <div class="line"></div>
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Битум нефтяной дорожный  Фасованный</a>
                </div>
                <div class="line"></div>
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Полимерно битумные вяжущие</a>
                </div>
                <div class="line"></div>
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Битум ПМБ</a>
                </div>
                <div class="line"></div>
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Битумные вяжущие PG Superpave</a>
                </div>
                <div class="line"></div>
                <div class="right-background-block">
                    <a href="" class="right-background-block-black">Холодный всфальт RISE</a>
                </div>
            </div>
        </div>
    </div>-->
    <div class="about-save">
        <div class="about-partners-head">
            <?=GetMessage("STORAGE")?>
        </div>
        <div class="save-text">
            <?=GetMessage("STORAGE-TEXT")?>
        </div>
    </div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>