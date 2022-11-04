<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Page\Asset;


$Asset = Asset::getInstance();

$url = str_replace("/" . CURRENT_LANG, "", $_SERVER["REQUEST_URI"]);


$fileName = substr($_SERVER["SCRIPT_FILENAME"],strrpos($_SERVER["SCRIPT_FILENAME"],'/'),strlen($_SERVER["SCRIPT_FILENAME"]));

$langPath = $_SERVER["DOCUMENT_ROOT"] . $APPLICATION->GetCurPage() . "/lang/" . CURRENT_LANG . "/" . $fileName;

if (isset($_REQUEST["realPath"]) && !empty($_REQUEST["realPath"])){
    $langPath = $_SERVER["DOCUMENT_ROOT"] . $_REQUEST["realPath"];
}

if (isset($_REQUEST["realPathChild"]) && !empty($_REQUEST["realPathChild"])){
    $langPath = $_SERVER["DOCUMENT_ROOT"] . $_REQUEST["realPathChild"];
}
if (isset($_REQUEST["realPathIndex"]) && !empty($_REQUEST["realPathIndex"])){
    $langPath = $_SERVER["DOCUMENT_ROOT"] . $_REQUEST["realPathIndex"];
}
__IncludeLang($langPath);
//__IncludeLang(__DIR__ . "/lang/" . CURRENT_LANG . "/header.php");
IncludeTemplateLangFile(__FILE__, $_REQUEST["current_lang"]);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?
            //$Asset->addCss(SITE_TEMPLATE_PATH.'/css/style.min-1.css');

            $Asset->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
            $Asset->addCss(SITE_TEMPLATE_PATH.'/css/styles.css');
            $Asset->addCss(SITE_TEMPLATE_PATH.'/css/oksana.css');
            $Asset->addCss(SITE_TEMPLATE_PATH.'/css/mobile_styles.css');
            $Asset->addCss(SITE_TEMPLATE_PATH.'/css/mob.css'); //Арсений
            
            $Asset->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
            //$Asset->addJs(SITE_TEMPLATE_PATH.'/js/app.js');
            //$Asset->addJs(SITE_TEMPLATE_PATH.'/js//app.min.js');
            $APPLICATION->ShowHead();
    
        ?>
        <title><?=$APPLICATION->ShowTitle();?></title>
    </head>
    
    <body class="">
        <div id="panel"><?=$APPLICATION->ShowPanel()?></div>
        <div class="wrapper">
        <header data-scroll="92" data-scroll-show="800" class="header">
            <div class="header__top-block header-top-block">
                <div data-da=".header-main-block__menu,991.98,last" class="header-top-block__container">
                    <a href="#" class="header-top-block__hotline _icon-hotline">Горячая линия для жалоб</a>
                    <a href="http://rosoil.stt-corp.ru/about/" target="_blank" class="header-top-block__info _icon-info">Коротко о Rise Oil</a>
                </div>
            </div>
            <nav class="header__main-block header-main-block">
                <div class="header-main-block__container">
                    <a href="/" class="header-main-block__logo"><img src="/img/header/logo3.svg" alt="Rise Oil"></a>
                    <ul data-one-spoller data-spollers class="header-main-block__menu">
                        <li сlass="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link"><?=GetMessage("ABOUT_COMPANY")?></a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title"><?=GetMessage("ABOUT_COMPANY")?></h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/how_work/" target="_blank" class="header-submenu__link">Как мы работаем?</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/about/" target="_blank" class="header-submenu__link">О нас</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/team/" target="_blank" class="header-submenu__link">Команда</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/work_world/" target="_blank" class="header-submenu__link">Работаем по
                                                всему миру</a>
                                        </li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/history/" target="_blank" class="header-submenu__link">История компании</a>
                                        </li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/constitution/" target="_blank" class="header-submenu__link">Конституция, ценности и
                                                культура </a>
                                        </li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/mails/" target="_blank" class="header-submenu__link">Благодарственные письма</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link">Нефть и нефтепродукты</a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title">Нефть и нефтепродукты</h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/allbitum/" target="_blank" class="header-submenu__link">Битумные
                                                материалы</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/sug/" target="_blank" class="header-submenu__link">LPG</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/bgs/" target="_blank" class="header-submenu__link">Бензин газовый
                                                стабильный</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/koks/" target="_blank" class="header-submenu__link">Нефтяной кокс</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/aviation_fuel/" target="_blank" class="header-submenu__link">Авиационное топливо</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/petrol/" target="_blank" class="header-submenu__link">Автомобильный бензин</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/d_oil/" target="_blank" class="header-submenu__link">Дизельное топливо</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/mazut/" target="_blank" class="header-submenu__link">Мазут топочный</a></li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/export/" target="_blank" class="header-submenu__link">Экспорт нефтопродуктов</a>
                                        </li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/passports/" target="_blank" class="header-submenu__link">Паспорт продукции</a></li>
                                        <li class="header-submenu__item"><a href="#" target="_blank" class="header-submenu__link">Документы</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link">Логистика</a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title">Логистика</h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/ru/logistics/" target="_blank" class="header-submenu__link">Что мы делаем в логистике</a>
                                        </li>
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/delivery/" target="_blank" class="header-submenu__link">Схема поставок</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link">Терминалы</a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title">Терминалы</h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/terminal/" target="_blank" class="header-submenu__link">Терминалы</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link">Ответственная работа</a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title">Ответственная работа</h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/complex_program/" target="_blank" class="header-submenu__link">Программа комплекса</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-main-block__item">
                            <a data-spoller-close data-spoller href="#" class="header-main-block__link">Новости</a>
                            <div class="header-main-block__submenu header-submenu">
                                <div class="header-submenu__container">
                                    <div class="header-submenu__content">
                                        <h2 class="header-submenu__title">Новости</h2>
                                        <div class="header-submenu__text">Наше видение – это все более процветающий мир, в котором нефть и
                                            нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                            Мы стараемся делать это быстро и ответственно</div>
                                    </div>
                                    <ul class="header-submenu__items">
                                        <li class="header-submenu__item"><a href="http://rosoil.stt-corp.ru/news/" target="_blank" class="header-submenu__link">Новости</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div class="header-main-block__item header-main-block__item_networks">
                            <a href="#" class="header-main-block__item_network-link _icon-vk"></a>
                            <a href="#" class="header-main-block__item_network-link _icon-telegram"></a>
                            <a href="#" class="header-main-block__item_network-link _icon-youtube"></a>
                        </div>
                    </ul>
                    <div class="header-main-block__actions">
                        <select class="header-main-block__language">
                            <option <?if (CURRENT_LANG == "ru"):?>selected=""<?endif?> value="/ru<?=$url?>">ru</option>
                            <option <?if (CURRENT_LANG == "en"):?>selected=""<?endif?> value="/en<?=$url?>">en</option>
                            <option <?if (CURRENT_LANG == "ch"):?>selected=""<?endif?> value="/ch<?=$url?>">ch</option>
                        </select>
                        <a href="tel:1234" class="header-main-block__phone _icon-phone"></a>
                        <button type="button" class="header-main-block__share _icon-share"></button>
                    </div>
                    <button type="button" class="header__burger icon-menu"><span></span></button>
                </div>
            </nav>
        </header>

        <div class="preloader">
            <div class="preloader__image">
                <img class="preloader__image-white" src="img/preloader/WhitePetals.svg" alt="">
                <img class="preloader__image-yellow" src="img/preloader/YellowElements.svg" alt="">
                <div class="preloader__image-letter">
                    <p>R</p>
                </div>
            </div>
        </div> 