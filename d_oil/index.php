<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизельное топливо");
?>
<div class="banner-page" style="background-image: url(/upload/banner.png)">
    <div class="container">
        <div class="banner-title">
            Дизельное топливо на экспорт
        </div>
        <div class="banner-text">
            Дизельное топливо (ДТ) — это нефтепродукт, состоящий из смеси углеводородов, которые получают методом перегонки и отбора из них определенных фракций.
        </div>
    </div>
</div>
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
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array("", ""),
		"IBLOCK_ID" => "",
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
		"PROPERTY_CODE" => array("", ""),
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
            <div class="page-info">
                <div class="page-info-text">
                    <span>
                        Для получения дизельного топлива нефть подвергают переработке с использованием ректификационных колонн, где она нагревается до нужной температуры и делится на фракции. Дизельная фракция — около четвертой части — получается при нагреве до 180-360 °C. Остальное получают в результате крекинг-процессов с катализаторами в виде металла, водорода или температуры. На этапе крекинга получают до 80% объема дизельного топлива. В конце его подвергают щелочной очистке от примесей.
                    </span>
                </div>
            </div>
            <div class="block-left">
                <div class="page-info">
                    <div class="page-info-text-two">
                        <div>
                            Маркировки дизельного топлива, обозначающие климатические условия применения:
                        </div>
                    </div>
                    
                    <div class="page-info-text-three">
                        <span>
                            ДТ-Л, Сорт С — летнее (- 5°С);<br>
                            ДТ-Е — межсезонное   (- 15 °С);<br>
                            ДТ-З — зимнее               (- 20°С);<br>
                            ДТ-А — арктическое     (- 38°С).
                        </span>
                    </div>
                </div>
            </div>
            <div class="block-right">
                <div class="page-info">
                    <div class="page-info-text-two">
                        <div>
                            Маркировка дизельного топлива, обозначающие экологический класс дизельного топлива:
                        </div>
                    </div>
               
                    <div class="page-info-text-three">
                        <span>
                            ДТ-Л, Сорт С — летнее (- 5°С);<br>
                            ДТ-Е — межсезонное   (- 15 °С);<br>
                            ДТ-З — зимнее               (- 20°С);<br>
                            ДТ-А — арктическое     (- 38°С).
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="polimer-PMB">
                    <div class="polimer-PMB-text">
                        Применение дизельного топлива характерно для заправки практически любых видов транспорта: 
                    </div>
                </div>
            </div>
                
            <div class="container">
                <div class="polimer-conteiner">
                    <div class="polimer-img">
                        <img src="/img/coil.png">
                    </div>
                    <div class="polimer-info">
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                01
                            </div>
                            <div class="polimer-info-text-a">
                                Легковых и грузовых автомобилей
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                02
                            </div>
                            <div class="polimer-info-text-a">
                                Водного транспорта
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                03
                            </div>
                            <div class="polimer-info-text-a">
                                Сельскохозяйственной спецтехники
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                04
                            </div>
                            <div class="polimer-info-text-a">
                                Железнодорожных составов
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                05
                            </div>
                            <div class="polimer-info-text-a">
                                Строительной спецтехники
                            </div>
                        </div>
                        <div class="polimer-info-text">
                            <div class="polimer-info-text-numbers">
                                06
                            </div>
                            <div class="polimer-info-text-a">
                                Военной техники
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
                            Классификация дизельного топлива в Европе стандарт (EN 590), EURO 5 (Евро 5).
                        </div>
                    </div>

                    <div class="polimer-txt">
                        <div>
                            Распространённая среди потребителей классификация Евро-5 первая после советских ГОСТов получила широкое распространение при маркировке российского дизеля. Связано это больше
                            с тем, что по нашим дорогам ездит больше зарубежных автомобилей, чем отечественных. 
                            На законодательном уровне евростандарт EN 590-2009 у нас не действует, но описанные в нём пункты лежат в основе российского ГОСТ 32511-2013
                        </div>
                    </div>
                </div>
                <div class="block-right">
                    <div class="page-info">

                    <div class="page-info-text-twos">
                        <div>
                        Евро-5 или EN 590-2009 — принятые Европейским Союзом стандарт, определяющий допустимость применения тех или иных классов дизеля в определённых климатических зонах.
                        </div>
                    </div>
               
                    <div class="page-info-text-sl">
                        <div>
                            При классификации дизельного топлива для его маркировки для продажи в Российской Федерации и странах Таможенного союза руководствуются двумя параметрами: содержанием сернистых примесей (экологичностью) и температурой фильтруемости (допустимыми климатическими использованиями для использования). При этом в паспортах качества 
                            на солярку, как и в случае с другими нефтепродуктами, обязательно указывают прочие характеристики партии — вязкость, содержание воды, цетановое число или воспламеняемость.
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="polimer-txt12">
                    <div>
                        Дизельное топливо соответствуют ГОСТам и СТО/ТУ и обеспечено сертификатами соответствия и паспортами качества заводов-производителей.  Вы можете ознакомиться в разделе Паспорта качеств и сертификаты соответствия
                    </div>
                </div>
            </div>
        </div>

    <div class="passport-block">
        <div class="passport-text">
            <img src="/img/PdfFile.png">
            <span>Паспорт качества продукци</span>
            <img src="/img/DownloadIcon.png">
        </div>
    </div>







    <section class="bitum-page__block-8 bitum-page-block-8">
        <div class="bitum-page-block-8__container">
            <h2 class="bitum-page-block-8__title">Особенности транспортировки и хранения дизельного топлива</h2>
            <div class="bitum-page-block-8__text">Компания RISE OIL GROUP осуществляет транспортировку дизельного топлива на экспорт 
по правилам перевозки опасных грузов. Каждый из указанных способов является безопасным и выбирается в зависимости от конкретных условий поставок. </div>
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
</div>

<div class="implementation">

        <div class="implementation-item">
            <div class="title-prewie implementation">
                Реализация автомобильного бензина на экспорт 
            </div>
            <div class="text implementation">
                Как оформить заказ и заключить контракт на поставку бензина и дизельного топлива?
                Реализация автомобильного бензина производится на контрактной основе, согласно Инкотермс 2010 и/или Инкотермс 2020. Заключить контракт на поставку Вы можете, направить официальный запрос на e-mail: info@bitum-rise.ru, скачать образец заявки 
                и далее связавшись с специалистами экспортного отдела светлых нефтепродуктов 
                по телефону +7&nbsp;800&nbsp;222-92-25.
            </div>
            <div class="black-line">
            </div>
        </div>
       
</div>

<div class="oil-products">
    <div class="container">
        <div class="title-prewie">
            Сегодня к реализации предлагаются следующие виды сырья и нефтепродуктов:
        </div>
        <div class="kinds">
            <div class="kinds-item">
                <div class="kinds-text">
                    Дизельное топливо
                </div>  
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    Битумные
                    материалы
                </div>
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    Газовый
                    конденсат
                </div>
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    Нафта
                </div>    
            </div>
            <div class="kinds-item">
                <div class="kinds-text">
                    Кокс
                    нефтяной
                </div>
            </div>
        </div>
    </div>
</div>





























        </section>

    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>