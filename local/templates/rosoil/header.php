<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Page\Asset;


$Asset = Asset::getInstance();

?>
<!DOCTYPE html>
<html>
    <head>
        <?
            
            $Asset->addJs(SITE_TEMPLATE_PATH.'/js/script.js');
            $Asset->addCss(SITE_TEMPLATE_PATH.'/normalize.min.css');

            $APPLICATION->ShowHead();
       
        ?>
        <title><?=$APPLICATION->ShowTitle();?></title>
    </head>
    <body class="body">
        <div id="panel"><?=$APPLICATION->ShowPanel()?></div>
        <header class="header">
            <div class="container">
                <div class="header__about">
                    <div class="header__about-item">
                        <img class="header__about-img" src="<?=SITE_TEMPLATE_PATH?>/icons/complaint.svg" alt="">
                        <a class="header__about-link" href="tel:+7800222-92-25">Горячая линия для жалоб</a>

                    </div>
                    <div class="header__about-item">
                        <img class="header__about-img" src="<?=SITE_TEMPLATE_PATH?>/icons/world.svg" alt="">
                        <a class="header__about-link" href="">Коротко о Rise Oil</a>
                    </div>
                </div>
            </div>
                <div class="header__inner">
                    <div class="container">
                        <div class="header__inner-wrapper">
                            <a href="" class="header__inner-logo"><img src="<?=SITE_TEMPLATE_PATH?>/icons/logo.png" alt=""></a>
                            <nav class="header__nav">
                                <ul class="header__menu">
                                    <li class="header__item header__item-about">О компании<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                    <li class="header__item header__item-oil">Нефть и нефтепродукты<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                    <li class="header__item header__item-logistics">Логистика<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                    <li class="header__item header__item-terminals">Терминалы<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                    <li class="header__item header__item-responsibility">Ответственная работа<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                    <li class="header__item header__item-news">Новости<img class="header__link-img" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-down.svg" alt=""><img class="header__link-img2" src="<?=SITE_TEMPLATE_PATH?>/icons/arrow-up.svg" alt=""></li>
                                </ul>
                            </nav>
                            <div class="header__contacts">
                                <div class="header__contacts-lang">
                                    <select class="header__contacts-select">
                                        <option value="ru" selected>ru</option>
                                        <option value="en">en</option>
                                        <option value="ch">ch</option>
                                    </select>
                                </div>

                                <a href="tel:+7800222-92-25"><img src="<?=SITE_TEMPLATE_PATH?>/icons/tel.svg" alt=""></a>
                                <a href=""><img src="<?=SITE_TEMPLATE_PATH?>/icons/social.svg" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div> 
                <div class="header__popup header__popup-about">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>О компании</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">О нас</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Команда</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Работаем по всему миру</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">История компании</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Конституция, ценности и культура </a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Благодарственные письма</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="header__popup header__popup-oil">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>Нефть 
                                    и нефтепродукты</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Светлые нефтепродукты</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Битумные материалы</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">LPG</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Бензин газовый стабильный</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Нефтяной кокс</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Паспорт продукции</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Документы  </a>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="header__popup header__popup-logistics">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>Логистика</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Что мы делаем в логистике</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Схема поставок </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="header__popup header__popup-terminals">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>Терминалы</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Терминалы</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="header__popup header__popup-responsibility">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>Ответственная
                                    работа</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">
                                    <a href="" class="header__popup-link">Ответственная
                                    работа</a>
                                </div>
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Программа
                                    комплекса</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="header__popup header__popup-news">
                    <div class="container">
                        <div class="header__popup-wrapper">
                            <div class="header__popup-text">
                                <span>Новости</span>
                                <p>Наше видение – это все более процветающий мир, в котором нефть и нефтепродукты беспрепятственно доставляются из любой точки мира в места наибольшего спроса.
                                Мы стараемся делать это быстро и ответственно</p>
                            </div>
                            <div class="header__popup-nav ">
                                <div class="header__popup-item">                            
                                    <a href="" class="header__popup-link">Новости</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </header>
        <div class="wrapper">
