<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Экспорт');
?>
<div class="coldasphalt">
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
            "ELEMENT_ID" => 189,
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
    <div class="container">
        <div class="coldasphalt-conteiner">
                <div class="asphalt-info">
                    Области применения
                </div>
                <div class="asphalt-text-conteiner">
                    <div class="asphalt-text">
                        <b>Ямочный ремонт</b><br>
                        Оперативно производить ямочный ремонт дорожного покрытия на дорогах местного значения и федеральных трассах
                    </div>
                    <div class="asphalt-text">
                        <b>Восстановление дорожного покрытия вокруг колодцев</b><br>
                        Восстановление дорожного покрытия вокруг колодцев, после штробления и аварийных работ
                    </div>
                    <div class="asphalt-text">
                        <b>Благоустройство дворов</b><br>
                        Благоустройство асфальтового покрытия дворовых и городских территорий и улиц города, круглый год
                    </div>
                    <div class="asphalt-text">
                        <b>Гидрофобный слой</b><br>
                        Удобен в устройстве гидрофобного слоя нефтеналивных терминалов
                    </div>
                </div>
        </div>
        <div class="coldasphalt-conteiner">
                <div class="asphalt-block">
                    <div class="asphalt-text-block asphalt-page">
                        Преимущества холодного асфальта
                    </div>
                </div>
            <div class="coldasphalt-block coldasphalt-page">
                <div class="coldasphalt-img">
                    <img src="/img/asphalt.png">
                </div>
                <div class="coldasphalt-info">
                    <div class="coldasphalt-info-text">
                        <div class="coldasphalt-info-text-numbers">
                            01
                        </div>
                        <div class="coldasphalt-info-text-a">
                            Устойчивость к колейности
                            </br>На основе органического вяжущего используется дорожный битум БНД 90/130 ГОСТ 22245-90
                        </div>
                    </div>
                    <div class="coldasphalt-info-text">
                        <div class="coldasphalt-info-text-numbers">
                            02
                        </div>
                        <div class="coldasphalt-info-text-a">
                            Укладка от -30OС до +45OС
                            </br>Возможность укладки в температурном </br>диапазоне от -30oС до +45oС.
                        </div>
                    </div>
                    <div class="coldasphalt-info-text">
                        <div class="coldasphalt-info-text-numbers">
                            03
                        </div>
                        <div class="coldasphalt-info-text-a">
                            Не требует дополнительно проливки краев
                            </br>Дополнительная пленка битума препятствует надежному сцеплению старого асфальта с холодной смесью
                        </div>
                    </div>
                    <div class="coldasphalt-info-text">
                        <div class="coldasphalt-info-text-numbers">
                            04
                        </div>
                        <div class="coldasphalt-info-text-a">
                            Срок хранения 5 лет
                            </br>Двухслойные полиэтиленовые мешки увеличивают срок хранения до 5 лет, что дает возможность хранить на открытых или закрытых площадках
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="coldasphalt-form">
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
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>