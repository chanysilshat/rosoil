<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
?>
    <main class="main">  
        <section class="howwork">
            <div class="howwork-bcg">
                <img src="/upload/iblock/2c9/0500wnusdqioryc0snrdijcfv016xlco.png" alt="">
            </div>
            <div class="howwork-container">
                <div class="howwork-main">
                    <h1 class="howwork-title"><?=GetMessage("WORK")?></h1>
                    <div class="howwork-descr">
                        <?=GetMessage("WORK-TEXT")?>
                    </div>
                </div>
                <div class="howwork-video">
                    <video class="howwork-video__video" autoplay muted loop src="/img/how-work.MP4"></video>
                </div>
                <div class="howwork-value">
                    <h3 class="howwork-value-title"><?=GetMessage("WE-CREATE-VALUE")?></h3>
                    <div class="howwork-descr">
                        <?=GetMessage("WE-CREATE-VALUE-TEXT")?>
                    </div>
                </div>
                <div class="howwork-competitors">
                    <h3 class="howwork-value-title"><?=GetMessage("DIFFERENCES")?></h3>
                    <div class="howwork-competitors-wrap">
                        <div data-watch class="howwork-competitors-item">
                            <div class="howwork-competitors-text">
                                <?=GetMessage("GLOBAL-COVERAGE")?>
                                <?=GetMessage("GLOBAL-COVERAGE-TEXT")?>
                            </div>
                            <div class="howwork-competitors-img">
                                <img src="/img/global-reach.jpeg" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="howwork-competitors-item">
                            <div class="howwork-competitors-img">
                                <img src="/img/Logistics-infrastructure.jpeg" loading="lazy" alt="">
                            </div>

                            <div class="howwork-competitors-text">
                                <?=GetMessage("LOGISTICS")?>
                                <?=GetMessage("LOGISTICS-TEXT")?>
                            </div>
                        </div>
                        <div class="howwork-competitors-item">
                            <div class="howwork-competitors-text">
                                <?=GetMessage("SERVICE")?>
                                <?=GetMessage("SERVICE-TEXT")?>
                            </div>
                            <div class="howwork-competitors-img">
                                <img src="/img/Comprehensive.jpeg" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="howwork-competitors-item">
                            <div class="howwork-competitors-img">
                                <img src="/img/Independence.jpeg" loading="lazy" alt="">
                            </div>

                            <div class="howwork-competitors-text">
                                <?=GetMessage("INDEPENDENCE")?>
                                <?=GetMessage("INDEPENDENCE-TEXT")?>
                            </div>
                        </div>
                        <div class="howwork-competitors-item">
                            <div class="howwork-competitors-text">
                                <?=GetMessage("FINANCIAL-POWER")?>
                                <?=GetMessage("FINANCIAL-POWER-TEXT")?>
                            </div>
                            <div class="howwork-competitors-img">
                                <img src="/img/power.jpg" loading="lazy" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="howwork-staff">
                    <h2 class="howwork-staff-title"><?=GetMessage("WE-EXPECT")?></h2>
                    <div class="howwork-descr">
                        <?=GetMessage("WE-EXPECT-TEXT")?>
                        <?=GetMessage("LIST")?>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "how-work",
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
                        "IBLOCK_ID" => "21",
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
                <div class="howwork-end">
                    <div class="howwork-competitors-img">
                        <img src="/img/Logistics-infrastructure.jpeg" loading="lazy" alt="">
                    </div>

                    <div class="howwork-end-text">
                            <?=GetMessage("LOGISTICS")?>
                            <?=GetMessage("LOGISTICS-TEXT")?>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
