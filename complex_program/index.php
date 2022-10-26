<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
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
		"ELEMENT_ID" => 71,
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

    <main class="main">  
        <section class="company-history">
            <!--Серый и желтый блок-->
            <div class="contabs">
                <div class="fabs">
                    <p class="item-fabs"><?=GetMessage("GRAY_BLOCK1")?></p>
                    <p class="item-fabs"><?=GetMessage("GRAY_BLOCK2")?></p>
                </div>

                <div class="sabs">
                    <div class="item-fabs2">
                        <?=GetMessage("YELLOW_BLOCK")?>
                    </div>
                </div>
            </div>
            

            <!--Флекс блоки-->
            <div class="main-blockx-flex">

                <div class="item-block-flexx">
                    <div class="item1-block-flexx"><?=GetMessage("DEL_BLOCK1")?></div>
                    <div><?=GetMessage("DEL_BLOCK2")?></div>
                </div>

                <div class="item-block-flexx">
                    <div class="item1-block-flexx"><?=GetMessage("DEL_BLOCK3")?></div>
                    <div><?=GetMessage("DEL_BLOCK4")?></div>
                </div>

                <div class="item-block-flexx">
                    <div class="item1-block-flexx"><?=GetMessage("DEL_BLOCK5")?></div>
                    <div><?=GetMessage("DEL_BLOCK6")?></div>
                </div>

            </div>



            <!--Заголовок и текст-->
            <div class="hat">
                <div class="mainh">
                    <?=GetMessage("GROUP_RESP1")?>
                </div>

                <div class="maint">
                    <?=GetMessage("GROUP_RESP2")?>
                </div>
            </div>

            <div class="mainh2">
                <?=GetMessage("ROW_INSTR1")?>
            </div>
            
        <!--Цифры с картинкой-->
            <div class="polimer-conteiner">
        <div class="polimer-img">
            <img src="/img/AdobeStock_1.png">
        </div>
        <div class="polimer-info">
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    01
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR2")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    02
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR3")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    03
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR4")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    04
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR5")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    05
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR6")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    06
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR7")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    07
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR8")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    08
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR9")?>
                </div>
            </div>
            <div class="polimer-info-text">
                <div class="polimer-info-text-numbers">
                    09
                </div>
                <div class="polimer-info-text-a">
                    <?=GetMessage("ROW_INSTR10")?>
                </div>
            </div>
            
        </div>
    </div>


        </section>

    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>