<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизельное топливо");
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
		"ELEMENT_ID" => 66,
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
    <main class="d-oil-page">  
        <section class="company-history">
            <div class="page-info">
                <div class="container">
                    <div class="page-info-text">
                        <span>
                            <?=GetMessage("FOR_D_OIL")?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="block-left">
                <div class="page-info">
                    <div class="container">
                        <div class="page-info-text-two">
                            <div>
                                <?=GetMessage("MARKER_D_OIL")?>
                            </div>
                        </div>
                    </div>  
                    <div class="container">
                        <div class="page-info-text-three">
                            <span>
                                <?=GetMessage("MARKER_D_OIL1")?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-right yellow">
                <div class="page-info">
                    <div class="container">
                        <div class="page-info-text-two">
                            <div>
                                <?=GetMessage("MARKER_D_OIL2")?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="page-info-text-three">
                            <span>
                                <?=GetMessage("MARKER_D_OIL3")?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="polimer-PMB">
                    <div class="polimer-PMB-text">
                        <?=GetMessage("PRIM_DIZ")?>
                    </div>
                </div>
            </div>
                
            <div class="container">
                <div class="polimer-conteiner">
                    <div class="polimer-img">
                        <img src="/img/coil.png" loading="lazy">
                    </div>
                    <div class="polimer-info">
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                01
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ1")?>
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                02
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ2")?>
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                03
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ3")?>
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                04
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ4")?>
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                05
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ5")?>
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                06
                            </div>
                            <div class="polimer-info-text-a">
                                <?=GetMessage("PRIM_DIZ6")?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    

        <div class='contains'>
            <div class="block-huge">
                <div class="container">
                    <div class="polimer-PMB">
                        <div class="polimer-PMB-text">
                            <?=GetMessage("CLASS_OIL")?>
                        </div>
                    </div>

                    <div class="polimer-txt">
                        <div>
                            <?=GetMessage("CLASS_OIL1")?>
                        </div>
                    </div>
                </div>
                <div class="block-right">
                    <div class="container">
                        <div class="page-info">
                    
                            <div class="page-info-text-twos">
                                <div>
                                    <?=GetMessage("CLASS_OIL2")?>
                                </div>
                            </div>
                
                    
                
                            <div class="page-info-text-sl">
                                <div>
                                    <?=GetMessage("CLASS_OIL3")?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="polimer-txt12">
                    <div>
                        <?=GetMessage("CLASS_OIL4")?>
                    </div>
                </div>
            </div>
        </div>

    <div class="passport-block">
        <div class="container">
            <div class="passport-text">
                <img src="/img/PdfFile.png" loading="lazy">
                <span><a href="http://rosoil.stt-corp.ru/passports/" target="_blank"><?=GetMessage("PASS_Q")?></a></span>
                <img src="/img/DownloadIcon.png" loading="lazy">
            </div>
        </div>
    </div>







    <section class="bitum-page__block-8 bitum-page-block-8">
        <div class="bitum-page-block-8__container container">
            <h2 class="bitum-page-block-8__title"><?=GetMessage("OSOB_TRANS")?></h2>
            <div class="bitum-page-block-8__text"><?=GetMessage("OSOB_TRANS1")?></div>
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
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-1.svg" loading="lazy" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS2")?></div>
                </div>
                <div class="bitum-page-block-8__item">
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-2.svg" loading="lazy" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS3")?></div>
                </div>
                <div class="bitum-page-block-8__item">
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-3.svg" loading="lazy" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS4")?></div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="implementation">
    <div class="container-implementation container">
        <div class="implementation-item">
            <div class="title-prewie implementation">
                <?=GetMessage("REAL_AUTO")?>
            </div>
            <div class="text implementation">
                <?=GetMessage("REAL_AUTO1")?>
            </div>
            <div class="implementation-block">
            </div>
        </div>
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
        <div class="title-prewie">
            <?=GetMessage("TODAY_REAL")?>
        </div>
        <div class="kinds">
            <div class="kinds-item">
                <div class="kinds-text">
                    <?=GetMessage("TODAY_REAL1")?>
                </div>  
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    <?=GetMessage("TODAY_REAL2")?>
                </div>
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    <?=GetMessage("TODAY_REAL3")?>
                </div>
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    <?=GetMessage("TODAY_REAL4")?>
                </div>    
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    <?=GetMessage("TODAY_REAL5")?>
                </div>
            </div>
        </div>
    </div>
</div>

        </section>

    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>