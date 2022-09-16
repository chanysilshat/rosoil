document.addEventListener('DOMContentLoaded', () => {
    const aboutPopup = document.querySelector('.header__popup-about'), 
    oilPopup = document.querySelector('.header__popup-oil'),
    logPopup = document.querySelector('.header__popup-logistics'),
    termPopup = document.querySelector('.header__popup-terminals'),
    respPopup = document.querySelector('.header__popup-responsibility'),
    newsPopup = document.querySelector('.header__popup-news'),
    aboutClick = document.querySelector('.header__item-about'),
    oilClick = document.querySelector('.header__item-oil'),
    logClick = document.querySelector('.header__item-logistics'),
    termClick = document.querySelector('.header__item-terminals'),
    respClick = document.querySelector('.header__item-responsibility'),
    newsClick = document.querySelector('.header__item-news'),
    aboutImg = aboutClick.querySelector('.header__link-img'),
    aboutImgSecond = aboutClick.querySelector('.header__link-img2'),
    oilImg = oilClick.querySelector('.header__link-img'),
    oilImgSecond = oilClick.querySelector('.header__link-img2'),
    logImg = logClick.querySelector('.header__link-img'),
    logImgSecond = logClick.querySelector('.header__link-img2'),
    termImg = termClick.querySelector('.header__link-img'),
    termImgSecond = termClick.querySelector('.header__link-img2'),
    respImg = respClick.querySelector('.header__link-img'),
    respImgSecond = respClick.querySelector('.header__link-img2'),
    newsImg = newsClick.querySelector('.header__link-img'),
    newsImgSecond = newsClick.querySelector('.header__link-img2');

    // Хэдер, выпадающие меню
    aboutClick.addEventListener('click', () => {
        aboutPopup.classList.toggle('open');
        aboutImg.classList.toggle('close');
        aboutImgSecond.classList.toggle('open');
    });

    oilClick.addEventListener('click', () => {
        oilPopup.classList.toggle('open');
        oilImg.classList.toggle('close');
        oilImgSecond.classList.toggle('open');
    });

    logClick.addEventListener('click', () => {
        logPopup.classList.toggle('open');
        logImg.classList.toggle('close');
        logImgSecond.classList.toggle('open');
    });
    termClick.addEventListener('click', () => {
        termPopup.classList.toggle('open');
        termImg.classList.toggle('close');
        termImgSecond.classList.toggle('open');

    });
    respClick.addEventListener('click', () => {
        respPopup.classList.toggle('open');
        respImg.classList.toggle('close');
        respImgSecond.classList.toggle('open');

    });
    newsClick.addEventListener('click', () => {
        newsPopup.classList.toggle('open');
        newsImg.classList.toggle('close');
        newsImgSecond.classList.toggle('open');

    });



    window.addEventListener('click', function (e) {
        if (!aboutPopup.contains(e.target) && !aboutClick.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            aboutPopup.classList.remove('open');
            aboutImg.classList.remove('close');
            aboutImgSecond.classList.remove('open');
    
        }
    });

    window.addEventListener('click', function (e) {
        if (!oilClick.contains(e.target) && !oilPopup.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            oilPopup.classList.remove('open');
            oilImg.classList.remove('close');
            oilImgSecond.classList.remove('open');

        }
    });

    window.addEventListener('click', function (e) {
        if (!logClick.contains(e.target) && !logPopup.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            logPopup.classList.remove('open');
            logImg.classList.remove('close');
            logImgSecond.classList.remove('open');

        }
    });

    window.addEventListener('click', function (e) {
        if (!termClick.contains(e.target) && !termPopup.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            termPopup.classList.remove('open');
            termImg.classList.remove('close');
            termImgSecond.classList.remove('open');

        }
    });

    window.addEventListener('click', function (e) {
        if (!respClick.contains(e.target) && !respPopup.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            respPopup.classList.remove('open');
            respImg.classList.remove('close');
            respImgSecond.classList.remove('open');

        }
    });

    window.addEventListener('click', function (e) {
        if (!newsClick.contains(e.target) && !newsPopup.contains(e.target)) {
            // Ниже код, который нужно выполнить при срабатывании события.
            newsPopup.classList.remove('open');
            newsImg.classList.remove('close');
            newsImgSecond.classList.remove('open');

        }
    });












});
