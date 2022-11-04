<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Безниз");
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
		"ELEMENT_ID" => 92,
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
<main class="petrol-page">
    <div class="usage">
        <div class="container">
            <div class="usage-blok">
                <div class="usage-item">
                    <div class="text">
                        Автомобильный бензин используют как для заправки транспортных средств, так и в качестве сырья для органического синтеза, изготовления этилена и парафина. 
                        На основе бензина производят: краски, лаки, растворители, 
                        мастики и другие вещества
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="classification">
        <div class="container">
            <div class="title-prewie classification">
                Классификация автомобильных бензинов
            </div>
        
        </div>  
        <div class="classification-block container">
            <div class="classification-img">
                <img src="/img/classification.png">    
            </div>
            <div class="classification-block-items">
                <div class="classification-item">
                    <div class="fuel">
                        <div class="fuel-item">
                            АИ - 100
                        </div>
                    </div>
                    <div class="text classification">
                                Высокооктановое топливо, предназначенное для применения в высокофорсированных двигателях прямого впрыска, а также в двигателях, в которых предусмотрено использование бензина с октановым числом выше 95.Применение бензина АИ-100-К5 способствует увеличению мощности двигателя, повышению динамики разгона, снижая уровень вибрации и шума.
                    </div>
                </div>
                <div class="classification-item">
                    <div class="fuel">
                        <div class="fuel-item">
                            АИ - 98
                        </div>
                    </div>
                    <div class="text-item">
                        <div class="text classification">
                            Топливо высшего качества с максимальным октановым числом, используется в автомобилях с двигателями высокой степени сжатия, а также на спортивных двигателях, оснащенных турбонаддувом.
                        </div>
                    </div>
                </div>
                <div class="classification-item">
                    <div class="fuel">
                        <div class="fuel-item">
                            АИ - 95
                        </div>
                    </div>
                    <div class="text-item">
                        <div class="text classification">
                            один из самых распространенных в России видов бензина, относится к премиальным маркам с улучшенными характеристиками, подходит для современных авто с инжекторным двигателем.
                        </div>
                    </div>
                </div>
                <div class="classification-item">
                    <div class="fuel">
                        <div class="fuel-item">
                            АИ - 92
                        </div>
                    </div>
                    <div class="text-item">
                        <div class="text classification">
                            топливо этой марки составляет около 60% всего мирового рынка, оптимально подходит для карбюраторных двигателей, отличается идеальным соотношением стоимости и качества. 
                        </div>
                    </div>
                </div>
                <div class="classification-item">
                    <div class="fuel">
                        <div class="fuel-item">
                            АИ - 80
                        </div>
                    </div>
                    <div class="text-item">
                        <div class="text classification">
                            разновидность горючего, активно используемая при заправке грузового транспорта, мотоциклов, сельскохозяйственной техники, компрессоров и электрогенераторов.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quality passport container">
            <div class="square">
                <svg width="212" height="60" viewBox="0 0 391 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-170" width="561" height="60" fill="#1D1D1D"/>
                </svg>
            </div>
            <div class="quality-block">
                <div class="quality-text ">
                    Автомобильные бензины соответствуют ГОСТам и СТО, обеспечено сертификатами соответствия и паспортами качества заводов-производителей.  Вы можете ознакомиться в разделе
                </div>
                <div class="quality-item">
                    <a href="http://rosoil.stt-corp.ru/passports/" target="_blank">Паспорта качества и сертификаты соответствия</a> 
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
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-1.svg" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS2")?></div>
                </div>
                <div class="bitum-page-block-8__item">
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-2.svg" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS3")?></div>
                </div>
                <div class="bitum-page-block-8__item">
                    <div class="bitum-page-block-8__image"><img src="/img/bgs-page/block-5-3.svg" alt="Формы отгрузки">
                    </div>
                    <div class="bitum-page-block-8__info"><?=GetMessage("OSOB_TRANS4")?></div>
                </div>
            </div>
        </div>
    </section>
    <div class="implementation container">
        <div class="implementation-item">
            <div class="title-prewie implementation">
                Реализация автомобильного бензина на экспорт 
            </div>
            <div class="text implementation">
                Как оформить заказ и заключить контракт на поставку бензина и дизельного топлива?
                Реализация автомобильного бензина производится на контрактной основе, согласно Инкотермс 2010 и/или Инкотермс 2020. Заключить контракт на поставку Вы можете, направить официальный запрос на e-mail: info@bitum-rise.ru, скачать образец заявки 
                и далее связавшись с специалистами экспортного отдела светлых нефтепродуктов 
                по телефону +7 800 222-92-25.
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
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>