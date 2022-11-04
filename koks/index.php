<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
?>
<div class="container-koks">
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
            "ELEMENT_ID" => 70,
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

        <main class="main koks-page">  
            <section class="company-history">
            
                <div class="page-info ">
                    <div class="container">
                        <div class="page-info-text">
                            <span>
                                <?=GetMessage("WEIGHT")?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="block-right2">
                    <div class="container">
                        <div class="page-info2">
                            <div>
                            <?=GetMessage("PRIM")?>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="polimer-PMB1 container">
                    <div class="polimer-PMB-text1">
                        <?=GetMessage("POKAZ")?>
                    </div>
                </div>
                    
                <div class="polimer-conteiner-koks">
                    <div class="container">
                        <div class="polimer-img">
                            <img src="/img/koks.png">
                        </div>
                        <div class="polimer-info">
                            <div class="polimer-info-text">
                                <div class="polimer-info-text-numbers">
                                    01
                                </div>
                                <div class="polimer-info-text-a">
                                    <?=GetMessage("ITEM_POKAZ1")?>
                                </div>
                            </div>
                            <div class="polimer-info-text">
                                <div class="polimer-info-text-numbers">
                                    02
                                </div>
                                <div class="polimer-info-text-a">
                                    <?=GetMessage("ITEM_POKAZ2")?>
                                </div>
                            </div>
                            <div class="polimer-info-text">
                                <div class="polimer-info-text-numbers">
                                    03
                                </div>
                                <div class="polimer-info-text-a">
                                    <?=GetMessage("ITEM_POKAZ3")?>
                                </div>
                            </div>
                            <div class="polimer-info-text">
                                <div class="polimer-info-text-numbers">
                                    04
                                </div>
                                <div class="polimer-info-text-a">
                                    <?=GetMessage("ITEM_POKAZ4")?>
                                </div>
                            </div>
                            <div class="polimer-info-text">
                                <div class="polimer-info-text-numbers">
                                    05
                                </div>
                                <div class="polimer-info-text-a">
                                    <?=GetMessage("ITEM_POKAZ5")?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="black-line">
                    </div>
                </div>

                <div class="polimer-PMB1">
                        <div class="polimer-PMB-text1 container">
                            <?=GetMessage("ZAV")?>
                        </div>
                </div>

                <div class="maint">
                    <div class="container">
                        <div class="fbl">
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER1")?>
                                </div>
                            </div>
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER2")?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="fbl">         
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER3")?>
                                </div>
                            </div>
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER4")?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="fbl">
                            
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER5")?>
                                </div>
                            </div>
                            <div class="st">
                                <div>
                                    <?=GetMessage("ITEM_BORDER6")?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="polimer-PMB1-koks container">
                        <div class="polimer-PMB-text1">
                            <?=GetMessage("CLAS")?>
                        </div>
                </div>

                <div class="polimer-tesxt container">
                    <div class="pol-text1">
                        <?=GetMessage("MAL")?>
                    </div>
                </div>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "koks_table",
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
                        "IBLOCK_ID" => "19",
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

                <div class="koks passport-block">
                    <div class="container">
                        <div class="passport-text">
                            <img src="/img/PdfFile.png">
                            <span><a href="http://rosoil.stt-corp.ru/passports/" target="_blank"><?=GetMessage("PASS")?></a></span>
                            <img src="/img/DownloadIcon.png">
                        </div>
                    </div>
                </div>

                <div class="logistics koks">
                    <div class="container">
                        <div class="title-prewie logistics">
                            <?=GetMessage("OSOB")?>
                        </div>
                        <div class="text logistics">
                            <?=GetMessage("TRANS")?>
                        </div>
                        <div class="bitum-page-block-8__decoration ">
                            <div class="bitum-page-block-8__decoration_circle-big">
                                <div class="bitum-page-block-8__decoration_circle-small first"></div>
                            </div>
    
                            <div class="bitum-page-block-8__decoration_circle-big">
                                <div class="bitum-page-block-8__decoration_circle-small"></div>
                            </div>
                        </div>
                        <div class="bitum-page-block-8__items">
                            <div class="bitum-page-block-8__item">
                                <div class="bitum-page-block-8__image">
                                    <svg width="100" height="60" viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1669 1.97198H93.8331C94.3735 1.97198 94.8116 2.40803 94.8116 2.94592V36.2545C94.8116 36.7924 94.3735 37.2284 93.8331 37.2284H6.16691C5.62654 37.2284 5.18849 36.7924 5.18849 36.2545V2.94592C5.18849 2.40803 5.62654 1.97198 6.1669 1.97198ZM4.21007 2.94592C4.21007 1.87014 5.08617 0.998047 6.1669 0.998047H93.8331C94.9139 0.998047 95.79 1.87014 95.79 2.94592V36.2545C95.79 37.3303 94.9139 38.2024 93.8331 38.2024H6.16691C5.08618 38.2024 4.21007 37.3303 4.21007 36.2545V2.94592ZM17.4896 10.7629V30.4318C17.4896 30.5948 17.3435 30.7269 17.1632 30.7269C16.983 30.7269 16.8369 30.5948 16.8369 30.4318V10.7629C16.8369 10.6 16.983 10.4679 17.1632 10.4679C17.3435 10.4679 17.4896 10.6 17.4896 10.7629ZM15.7489 10.7629C15.7489 10.0568 16.3821 9.48442 17.1632 9.48442C17.9444 9.48442 18.5776 10.0568 18.5776 10.7629V30.4318C18.5776 31.1379 17.9444 31.7103 17.1632 31.7103C16.3821 31.7103 15.7489 31.1379 15.7489 30.4318V10.7629ZM25.976 30.051V10.7397C25.976 10.5797 25.8299 10.45 25.6496 10.45C25.4694 10.45 25.3232 10.5797 25.3232 10.7397V30.051C25.3232 30.2109 25.4694 30.3406 25.6496 30.3406C25.8299 30.3406 25.976 30.2109 25.976 30.051ZM25.6496 9.48442C24.8685 9.48442 24.2352 10.0464 24.2352 10.7397V30.051C24.2352 30.7442 24.8685 31.3062 25.6496 31.3062C26.4308 31.3062 27.064 30.7442 27.064 30.051V10.7397C27.064 10.0464 26.4308 9.48442 25.6496 9.48442ZM34.7395 29.3664V11.7432V10.8464C34.7395 10.1493 35.3801 9.58429 36.1704 9.58429C36.9607 9.58429 37.6014 10.1493 37.6014 10.8464V11.7432V29.3664V30.2632C37.6014 30.9602 36.9607 31.5253 36.1704 31.5253C35.3801 31.5253 34.7395 30.9602 34.7395 30.2632V29.3664ZM36.5006 10.8464V11.4363V12.5168V28.5928V29.6733V30.2632C36.5006 30.4241 36.3528 30.5545 36.1704 30.5545C35.9881 30.5545 35.8402 30.4241 35.8402 30.2632V29.6733V28.5928V12.5168V11.4363V10.8464C35.8402 10.6855 35.9881 10.5551 36.1704 10.5551C36.3528 10.5551 36.5006 10.6855 36.5006 10.8464ZM44.2758 11.7432V29.3664V30.2632C44.2758 30.9602 44.9164 31.5253 45.7067 31.5253C46.497 31.5253 47.1377 30.9602 47.1377 30.2632V29.3664V11.7432V10.8464C47.1377 10.1493 46.497 9.58429 45.7067 9.58429C44.9164 9.58429 44.2758 10.1493 44.2758 10.8464V11.7432ZM46.0369 11.4363V10.8464C46.0369 10.6855 45.8891 10.5551 45.7067 10.5551C45.5243 10.5551 45.3765 10.6855 45.3765 10.8464V11.4363V12.5168V28.5928V29.6733V30.2632C45.3765 30.4241 45.5243 30.5545 45.7067 30.5545C45.8891 30.5545 46.0369 30.4241 46.0369 30.2632V29.6733V28.5928V12.5168V11.4363ZM55.5783 10.8464V30.2632C55.5783 30.4241 55.4305 30.5545 55.2481 30.5545C55.0658 30.5545 54.9179 30.4241 54.9179 30.2632V10.8464C54.9179 10.6855 55.0658 10.5551 55.2481 10.5551C55.4305 10.5551 55.5783 10.6855 55.5783 10.8464ZM53.8172 10.8464C53.8172 10.1493 54.4578 9.58429 55.2481 9.58429C56.0384 9.58429 56.6791 10.1493 56.6791 10.8464V30.2632C56.6791 30.9602 56.0384 31.5253 55.2481 31.5253C54.4578 31.5253 53.8172 30.9602 53.8172 30.2632V10.8464ZM65.1197 30.2632V10.8464C65.1197 10.6855 64.9719 10.5551 64.7895 10.5551C64.6072 10.5551 64.4593 10.6855 64.4593 10.8464V30.2632C64.4593 30.4241 64.6072 30.5545 64.7895 30.5545C64.9719 30.5545 65.1197 30.4241 65.1197 30.2632ZM64.7895 9.58429C63.9992 9.58429 63.3586 10.1493 63.3586 10.8464V30.2632C63.3586 30.9602 63.9992 31.5253 64.7895 31.5253C65.5798 31.5253 66.2205 30.9602 66.2205 30.2632V10.8464C66.2205 10.1493 65.5798 9.58429 64.7895 9.58429ZM74.656 10.8464V30.2632C74.656 30.4241 74.5082 30.5545 74.3258 30.5545C74.1434 30.5545 73.9956 30.4241 73.9956 30.2632V10.8464C73.9956 10.6855 74.1434 10.5551 74.3258 10.5551C74.5082 10.5551 74.656 10.6855 74.656 10.8464ZM72.8949 10.8464C72.8949 10.1493 73.5355 9.58429 74.3258 9.58429C75.1161 9.58429 75.7568 10.1493 75.7568 10.8464V30.2632C75.7568 30.9602 75.1161 31.5253 74.3258 31.5253C73.5355 31.5253 72.8949 30.9602 72.8949 30.2632V10.8464ZM84.1974 30.2632V10.8464C84.1974 10.6855 84.0496 10.5551 83.8672 10.5551C83.6849 10.5551 83.537 10.6855 83.537 10.8464V30.2632C83.537 30.4241 83.6849 30.5545 83.8672 30.5545C84.0496 30.5545 84.1974 30.4241 84.1974 30.2632ZM83.8672 9.58429C83.0769 9.58429 82.4363 10.1493 82.4363 10.8464V30.2632C82.4363 30.9602 83.0769 31.5253 83.8672 31.5253C84.6575 31.5253 85.2982 30.9602 85.2982 30.2632V10.8464C85.2982 10.1493 84.6575 9.58429 83.8672 9.58429ZM23.224 52.4386C23.224 55.8631 20.2627 58.6393 16.6099 58.6393C12.957 58.6393 9.99577 55.8631 9.99577 52.4386C9.99577 49.014 12.957 46.2379 16.6099 46.2379C20.2627 46.2379 23.224 49.014 23.224 52.4386ZM24.2415 52.4386C24.2415 56.39 20.8247 59.5933 16.6099 59.5933C12.395 59.5933 8.97821 56.39 8.97821 52.4386C8.97821 52.1764 8.99325 51.9175 9.02257 51.6626C8.41634 51.9384 7.69152 51.7009 7.37029 51.1061L4.92997 46.5875C4.80076 46.3483 4.7557 46.0861 4.78464 45.835H2.36301C1.27585 45.835 0.394531 44.8859 0.394531 43.7151V40.3233C0.394531 39.1525 1.27585 38.2034 2.36301 38.2034H97.6376C98.7248 38.2034 99.6061 39.1525 99.6061 40.3233V43.7151C99.6061 44.8859 98.7248 45.835 97.6376 45.835H94.077C94.1118 46.1055 94.0608 46.3891 93.9125 46.6427L91.3197 51.0756C91.0502 51.5362 90.537 51.7657 90.0394 51.6962C90.0587 51.9174 90.0685 52.1413 90.0685 52.3676C90.0685 56.5824 86.6517 59.9992 82.4369 59.9992C78.222 59.9992 74.8052 56.5824 74.8052 52.3676C74.8052 49.5976 76.2809 47.1724 78.489 45.835H68.7138C72.1884 46.5044 74.8013 49.3877 74.8013 52.8432C74.8013 56.7946 71.3844 59.9979 67.1696 59.9979C62.9547 59.9979 59.5379 56.7946 59.5379 52.8432C59.5379 52.3994 59.581 51.965 59.6635 51.5436C59.2012 51.6396 58.7033 51.4746 58.3939 51.0767L55.2417 47.0225C54.9698 46.6728 54.9082 46.2262 55.0378 45.835H43.3585C43.3933 46.1055 43.3423 46.3891 43.194 46.6427L40.6012 51.0756C40.3585 51.4904 39.9182 51.7178 39.4695 51.7082C39.4955 51.9483 39.5088 52.192 39.5088 52.4386C39.5088 56.39 36.092 59.5933 31.8771 59.5933C27.6623 59.5933 24.2455 56.39 24.2455 52.4386C24.2455 49.4649 26.1806 46.9149 28.9347 45.835H19.5523C22.3064 46.9149 24.2415 49.4649 24.2415 52.4386ZM89.4143 49.2712L91.4241 45.835H86.3848C87.7141 46.6402 88.778 47.8396 89.4143 49.2712ZM92.4372 44.7751H83.2151C82.9592 44.7492 82.6996 44.7359 82.4369 44.7359C82.1741 44.7359 81.9145 44.7492 81.6586 44.7751H42.4641C42.2172 44.6995 41.9576 44.7024 41.7187 44.7751H6.4791C6.21005 44.6804 5.91027 44.6754 5.62902 44.7751H2.36301C1.81943 44.7751 1.37877 44.3005 1.37877 43.7151V40.3233C1.37877 39.7379 1.81943 39.2633 2.36301 39.2633H97.6376C98.1812 39.2633 98.6218 39.7379 98.6218 40.3233V43.7151C98.6218 44.3005 98.1812 44.7751 97.6376 44.7751H93.1826C92.9357 44.6995 92.6761 44.7024 92.4372 44.7751ZM92.5633 45.835C92.5604 45.8395 92.5576 45.844 92.5549 45.8487L89.9621 50.2815C89.8799 50.4221 89.9272 50.6027 90.0677 50.6849C90.2083 50.7672 90.389 50.7199 90.4712 50.5793L93.064 46.1464C93.1226 46.0463 93.1154 45.9258 93.0556 45.835H92.5633ZM65.6254 45.835C63.3605 46.2714 61.4618 47.6484 60.4142 49.5114L60.4115 49.508L57.5558 45.835H65.6254ZM39.2528 50.5941C39.237 50.5383 39.2204 50.4828 39.2032 50.4276C39.2036 50.3779 39.2167 50.3275 39.2436 50.2815L41.8364 45.8487C41.8391 45.844 41.8419 45.8395 41.8448 45.835H42.3371C42.3969 45.9258 42.4041 46.0463 42.3455 46.1464L39.7527 50.5793C39.6705 50.7199 39.4898 50.7672 39.3493 50.6849C39.3093 50.6616 39.2769 50.6302 39.2528 50.5941ZM40.7056 45.835L38.7096 49.2476C37.8946 47.7169 36.5117 46.4985 34.8196 45.835H40.7056ZM13.6674 45.835C11.7966 46.5686 10.3037 47.9804 9.53855 49.7427L7.42819 45.835H13.6674ZM6.31097 45.835H5.79764C5.74946 45.9204 5.74486 46.0278 5.79486 46.1204L8.23519 50.639C8.31258 50.7823 8.49148 50.8357 8.63478 50.7583C8.77808 50.6809 8.83151 50.502 8.75412 50.3587L6.31379 45.8402L6.31097 45.835ZM81.395 45.835C78.2371 46.3347 75.8228 49.0692 75.8228 52.3676C75.8228 56.0204 78.784 58.9817 82.4369 58.9817C86.0897 58.9817 89.051 56.0204 89.051 52.3676C89.051 49.0692 86.6366 46.3347 83.4788 45.835H81.395ZM31.8771 58.6393C35.53 58.6393 38.4912 55.8631 38.4912 52.4386C38.4912 49.014 35.53 46.2379 31.8771 46.2379C28.2243 46.2379 25.263 49.014 25.263 52.4386C25.263 55.8631 28.2243 58.6393 31.8771 58.6393ZM73.7837 52.8432C73.7837 56.2677 70.8225 59.0439 67.1696 59.0439C63.5167 59.0439 60.5555 56.2677 60.5555 52.8432C60.5555 49.4186 63.5167 46.6425 67.1696 46.6425C70.8225 46.6425 73.7837 49.4186 73.7837 52.8432ZM59.6355 50.1113L56.4833 46.0571C56.3834 45.9286 56.1981 45.9054 56.0695 46.0054C55.941 46.1053 55.9178 46.2906 56.0177 46.4192L59.1699 50.4733C59.2699 50.6019 59.4552 50.6251 59.5838 50.5251C59.7123 50.4252 59.7355 50.2399 59.6355 50.1113ZM31.8755 54.2278C32.9038 54.2278 33.7374 53.3942 33.7374 52.3659C33.7374 51.3376 32.9038 50.504 31.8755 50.504C30.8472 50.504 30.0136 51.3376 30.0136 52.3659C30.0136 53.3942 30.8472 54.2278 31.8755 54.2278ZM31.8755 55.2278C33.4561 55.2278 34.7374 53.9465 34.7374 52.3659C34.7374 50.7853 33.4561 49.504 31.8755 49.504C30.2949 49.504 29.0136 50.7853 29.0136 52.3659C29.0136 53.9465 30.2949 55.2278 31.8755 55.2278ZM69.0349 52.3659C69.0349 53.3942 68.2014 54.2278 67.1731 54.2278C66.1448 54.2278 65.3112 53.3942 65.3112 52.3659C65.3112 51.3376 66.1448 50.504 67.1731 50.504C68.2014 50.504 69.0349 51.3376 69.0349 52.3659ZM70.0349 52.3659C70.0349 53.9465 68.7536 55.2278 67.1731 55.2278C65.5925 55.2278 64.3112 53.9465 64.3112 52.3659C64.3112 50.7853 65.5925 49.504 67.1731 49.504C68.7536 49.504 70.0349 50.7853 70.0349 52.3659ZM82.4352 54.6324C83.4635 54.6324 84.2971 53.7988 84.2971 52.7705C84.2971 51.7422 83.4635 50.9086 82.4352 50.9086C81.4069 50.9086 80.5733 51.7422 80.5733 52.7705C80.5733 53.7988 81.4069 54.6324 82.4352 54.6324ZM82.4352 55.6324C84.0158 55.6324 85.2971 54.3511 85.2971 52.7705C85.2971 51.1899 84.0158 49.9086 82.4352 49.9086C80.8547 49.9086 79.5733 51.1899 79.5733 52.7705C79.5733 54.3511 80.8547 55.6324 82.4352 55.6324ZM18.4752 51.9613C18.4752 52.9896 17.6416 53.8232 16.6133 53.8232C15.5851 53.8232 14.7515 52.9896 14.7515 51.9613C14.7515 50.933 15.5851 50.0994 16.6133 50.0994C17.6416 50.0994 18.4752 50.933 18.4752 51.9613ZM19.4752 51.9613C19.4752 53.5419 18.1939 54.8232 16.6133 54.8232C15.0328 54.8232 13.7515 53.5419 13.7515 51.9613C13.7515 50.3807 15.0328 49.0994 16.6133 49.0994C18.1939 49.0994 19.4752 50.3807 19.4752 51.9613Z" fill="#777777"/>
                                    </svg>
                                </div>
                                <div class="bitum-page-block-8__info">Полувагон, 60 тонн</div>
                            </div>
                        
                            <div class="bitum-page-block-8__item">
                                <div class="bitum-page-block-8__image">
                                    <svg width="141" height="67" viewBox="0 0 141 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.603 1C102.021 1 102.359 1.68744 102.359 2.53543V5.30472H105.789C106.206 5.30472 106.544 5.99215 106.544 6.84015C106.544 7.68815 106.206 8.37558 105.789 8.37558H105.266L106.292 18.9037H107.473C107.89 18.9037 108.228 19.5911 108.228 20.4391C108.228 21.2871 107.89 21.9746 107.473 21.9746H106.591L107.656 32.894H108.449V22.298C108.449 21.45 108.788 20.7626 109.205 20.7626H113.405V19.2651C113.405 18.4171 113.743 17.7297 114.16 17.7297C114.577 17.7297 114.916 18.4171 114.916 19.2651V20.8326C115.222 21.028 115.445 21.6102 115.445 22.298V32.894H118.827C119.244 32.894 119.582 33.5815 119.582 34.4295V38.9129C119.582 39.0651 119.571 39.2122 119.551 39.3511H123.796V27.6789C123.796 26.8309 124.135 26.1435 124.552 26.1435C124.969 26.1435 125.307 26.8309 125.307 27.6789V39.3511H128.256C128.48 39.3511 128.692 39.5527 128.836 39.9015C128.98 40.2503 129.04 40.7105 129 41.1581L128.39 48.0584H130.917V45.3869C130.917 44.5389 131.255 43.8515 131.672 43.8515C132.09 43.8515 132.428 44.5389 132.428 45.3869V48.0584H135.858C136.275 48.0584 136.613 48.7458 136.613 49.5938V53.7327H138.745C139.02 53.7327 139.274 54.0383 139.407 54.53C139.54 55.0217 139.53 55.6212 139.381 56.0939L136.495 65.2904C136.356 65.7324 136.116 66 135.858 66H14.0425C13.8156 66 13.6007 65.7927 13.4572 65.4355L1.67021 36.0851C1.48573 35.6258 1.44788 34.9916 1.57297 34.4559C1.69806 33.9202 1.96374 33.5788 2.25548 33.5788H21.4883L35.319 53.7327H43.0192V49.5938C43.0192 48.7458 43.3575 48.0584 43.7747 48.0584H85.7758L85.1292 41.1745C85.087 40.7249 85.1456 40.2606 85.2891 39.9079C85.4327 39.5553 85.6461 39.3511 85.8713 39.3511H86.9921V36.6797C86.9921 35.8317 87.3303 35.1442 87.7476 35.1442C88.1648 35.1442 88.503 35.8317 88.503 36.6797V39.3511H90.3117V34.0082H90.0569C89.6396 34.0082 89.3014 33.3208 89.3014 32.4728V28.0702C89.3014 27.2222 89.6396 26.5348 90.0569 26.5348H97.1772C97.5944 26.5348 97.9327 27.2222 97.9327 28.0702V30.9374H99.9692L100.615 21.9746H99.8233C99.406 21.9746 99.0678 21.2871 99.0678 20.4391C99.0678 19.5911 99.406 18.9037 99.8233 18.9037H100.836L101.595 8.37558H100.882C100.464 8.37558 100.126 7.68815 100.126 6.84015C100.126 6.35027 100.239 5.91397 100.415 5.63283V5.17696C100.415 4.56343 100.592 4.03393 100.848 3.78804V2.53543C100.848 1.68744 101.186 1 101.603 1ZM44.5302 53.7327H135.102V51.1293H127.487C127.263 51.1293 127.051 50.9277 126.907 50.5789C126.764 50.2301 126.704 49.7699 126.743 49.3223L127.353 42.422H86.7846L87.4312 49.3059C87.4734 49.7554 87.4148 50.2198 87.2713 50.5725C87.1278 50.9251 86.9143 51.1293 86.6891 51.1293H44.5302V53.7327Z" stroke="#777777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="bitum-page-block-8__info">Морской танкер 2000 тонн</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="implementation">
                    <div class="container-implementation container">
                        <div class="implementation-item">
                            <div class="title-prewie implementation">
                                <?=GetMessage("REAL")?>  
                            </div>
                            <div class="text implementation">
                                <?=GetMessage("REAL1")?>
                            </div>
                            <div class="implementation-block">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="koks_gallery">
                    <div class="container">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "koks_gallery",
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
                </div>
                </div>
                <div class="koks-form">
                    <div class="koks-form-item">
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
                <div class="oil-products">
                    <div class="container">
                        <div class="title-prewie oil-products">
                            <?=GetMessage("TOMREAL1")?>
                        </div>
                        <div class="kinds">
                            <div class="kinds-item">
                                <div class="kinds-text">
                                    <?=GetMessage("TOMREAL2")?>
                                </div>  
                            </div>
                            <div class="kinds-item">
                                <div class="kinds-text">
                                    <?=GetMessage("TOMREAL3")?>
                                </div>
                            </div>
                            <div class="kinds-item">
                                <div class="kinds-text">
                                    <?=GetMessage("TOMREAL4")?>
                                </div>
                            </div>
                            <div class="kinds-item">
                                <div class="kinds-text">
                                    <?=GetMessage("TOMREAL5")?>
                                </div>    
                            </div>
                            <div class="kinds-item">
                                <div class="kinds-text">
                                    <?=GetMessage("TOMREAL6")?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </main>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>