/*
Документация по работе в шаблоне: 
Документация слайдера: https://swiperjs.com/
Сниппет(HTML): swiper
*/

// Подключаем слайдер Swiper из node_modules
// При необходимости подключаем дополнительные модули слайдера, указывая их в {} через запятую
// Пример: { Navigation, Autoplay }
import Swiper, { Pagination, Autoplay, Navigation } from 'swiper';
/*
Основниые модули слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation, Keyboard
Подробнее смотри https://swiperjs.com/
*/

// Стили Swiper
// Базовые стили
import "../../scss/base/swiper.scss";
// Полный набор стилей из scss/libs/swiper.scss
// import "../../scss/libs/swiper.scss";
// Полный набор стилей из node_modules
// import 'swiper/css';

// Инициализация слайдеров
function initSliders() {
	// Перечень слайдеров
	// Проверяем, есть ли слайдер на стронице
	if (document.querySelector('.block-1__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-1__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Pagination, Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 1,
			spaceBetween: 0, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 1600,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 0, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				delay: 6000,
				disableOnInteraction: false,
			},


			// Пагинация

			pagination: {
				el: '.block-1__slider .block-1__pagination',
				clickable: true,
				//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
				//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
				//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

				//Добавляет в пагинатор нумерацию на каждый слайд.
				// renderBullet: function (index, className) { //
				// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
				// },
				//

			},


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.swiper-button-prev',
			// 	nextEl: '.swiper-button-next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты
			/*
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
				1268: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
			},
			*/
			// События
			on: {

			}
		});
	}
	if (document.querySelector('.block-4-tabs__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-4-tabs__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 19, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: false,
			watchOverflow: true, //по умолчанию нет


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 0, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},


			// Пагинация

			pagination: {
				el: '.block-4-tabs__controlls .block-4-tabs__pagination',
				clickable: true,
				//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
				//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
				//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

				//Добавляет в пагинатор нумерацию на каждый слайд.
				// renderBullet: function (index, className) { //
				// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
				// },
				//

			},


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			navigation: {
				prevEl: '.block-4-tabs__slider .block-4-tabs__prev',
				nextEl: '.block-4-tabs__slider .block-4-tabs__next',
			},


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				650: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				992: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1300: {
					slidesPerView: 3,
					spaceBetween: 19,
				},
			},

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.block-8__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-8__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 7,
			spaceBetween: 0, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 0, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				delay: 0,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.swiper-button-prev',
			// 	nextEl: '.swiper-button-next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			breakpoints: {
				320: {
					slidesPerView: 3,
				},
				480: {
					slidesPerView: 4,
				},
				768: {
					slidesPerView: 5,
				},
				1300: {
					slidesPerView: 7,
				},
			},

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.block-9__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-9__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 4,
			spaceBetween: 74, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 1000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 0, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				reverseDirection: true,
				delay: 4000,
				disableOnInteraction: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.swiper-button-prev',
			// 	nextEl: '.swiper-button-next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				480: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 20,
				},
				1300: {
					slidesPerView: 4,
					spaceBetween: 74,
				},
			},

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.block-10__slider-top')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-10__slider-top', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 0,
			speed: 3000,
			grabCursor: true,
			watchOverflow: true,
			freeMode: false,
			loop: true,
			loopAdditionalSlides: 50,

			//centeredSlides: true,


			autoplay: {
				delay: 800,
				disableOnInteraction: false,
				pauseOnMouseEnter: true,
				//waitForTransition: false,
			},


			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				480: {
					slidesPerView: 2,
				},
				1100: {
					slidesPerView: 3,
				},
			},

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.block-10__slider-bottom')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.block-10__slider-bottom', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 5,
			spaceBetween: 0, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 3000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: false,
			loopAdditionalSlides: 50,
			initialSlide: 10,

			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				reverseDirection: true,
				delay: 800,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
				},
				480: {
					slidesPerView: 3,
				},
				1100: {
					slidesPerView: 4,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.swiper-button-prev',
			// 	nextEl: '.swiper-button-next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.bitum-page-block-10__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.bitum-page-block-10__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Navigation, Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 2,
			spaceBetween: 16, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,
			loopAdditionalSlides: 50,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				//reverseDirection: true,
				delay: 1000,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				650: {
					slidesPerView: 2,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			navigation: {
				prevEl: '.bitum-page-block-10__arrows .bitum-page-block-10__arrow_prev',
				nextEl: '.bitum-page-block-10__arrows .bitum-page-block-10__arrow_next',
			},


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.bitum-fas-page-block-9__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.bitum-fas-page-block-9__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Navigation, Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 2,
			spaceBetween: 16, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,
			loopAdditionalSlides: 50,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				//reverseDirection: true,
				delay: 1000,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				650: {
					slidesPerView: 2,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			navigation: {
				prevEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_prev',
				nextEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_next',
			},


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.bitum-pg-page-block-8__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.bitum-pg-page-block-8__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Navigation, Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 2,
			spaceBetween: 16, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,
			loopAdditionalSlides: 50,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				//reverseDirection: true,
				delay: 1000,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				650: {
					slidesPerView: 2,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			navigation: {
				prevEl: '.bitum-pg-page-block-8__arrows .bitum-pg-page-block-8__arrow_prev',
				nextEl: '.bitum-pg-page-block-8__arrows .bitum-pg-page-block-8__arrow_next',
			},


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.news-page-block-2__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.news-page-block-2__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 20, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,
			loopAdditionalSlides: 50,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				delay: 1000,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},

			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				500: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 3,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_prev',
			// 	nextEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
	if (document.querySelector('.mails-page__slider')) { // Указываем скласс нужного слайдера
		// Создаем слайдер
		new Swiper('.mails-page__slider', { // Указываем скласс нужного слайдера
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Autoplay],
			observer: true,
			observeParents: true,
			slidesPerView: 4,
			spaceBetween: 20, //устанавливает расстояние между слайдами
			//autoHeight: true, //устаналивает одинаковую высоту всем картинкам
			speed: 2000,
			grabCursor: true,
			loop: true,
			watchOverflow: true, //по умолчанию нет
			freeMode: true,
			loopAdditionalSlides: 50,


			//slidesPerGroup: 1, //Для группового скольжения свайпера вместе с slidesPerView>1
			//slidesOffsetBefore: 1500, //Добавляет смешение слайда в начале контейнера
			//slidesOffsetAfter: 0, //Добавляет смешение слайда в конце контейнера
			//direction: 'vertical', //делает вертикальный свайпер
			//centeredSlides: true, //По умолчанию false
			//touchRatio: 0, //устанавливает усилие свайпа. 0 - отключено, 1-обычный(по ум).
			//simulateTouch: false, //запрещает двигать слайдер свайпом.
			//touchAngle: 90; //угол при котором срабатывает свайп. 45- горизонтальный(по ум).
			//slideToClickedSlide: true, //позволяет перейти к слайду при клике на него(??)
			//preloadImages: false,
			//lazy: true,
			//parallax: true, //создаёт подолнительный параллакс эффект


			// Эффекты
			//effect: 'fade',
			autoplay: {
				delay: 1000,
				disableOnInteraction: false,
				stopOnLastSlide: false,
				//waitForTransition: false,
				pauseOnMouseEnter: true
			},

			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 15,
				},
				600: {
					slidesPerView: 2,
					spaceBetween: 15,
				},
				900: {
					slidesPerView: 3,
					spaceBetween: 15,
				},
				1200: {
					slidesPerView: 4,
				},
			},


			// Пагинация

			// pagination: {
			// 	el: '.block-1__slider .block-1__pagination',
			// 	clickable: true,
			// 	//dynamicBullets: true, //Позволяет буллетам увеSличиваться и уменьшаться при скоролле слайдов.
			// 	//type: 'fraction', //делает пагинатор счётчиком страниц 5\7. Чтобы поменять текст, смотри FLS
			// 	//type: 'progressbar', //делает пагинатор линией, которая заполняется при скролле

			// 	//Добавляет в пагинатор нумерацию на каждый слайд.
			// 	// renderBullet: function (index, className) { //
			// 	// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
			// 	// },
			// 	//

			// },


			// Скроллбар
			/*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

			// Кнопки "влево/вправо"
			// navigation: {
			// 	prevEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_prev',
			// 	nextEl: '.bitum-fas-page-block-9__arrows .bitum-fas-page-block-9__arrow_next',
			// },


			//Включает переключение слайдов стрелками клавиаты и кнопка pgup-dwn. 
			/*
			keyboard: {
				enabled: true,
				onlyInViewport: true,
				pageUpDown: true,
			},
			*/


			//Включает перелистывание слайдов колесом мышки
			/*
			mousewheel: {
				sensitivity: 1,
				//eventsTarget: ".swiper-slide" //Включать если много слайдеров, чтобы не крутились дургие
			},
			*/


			// Брейкпоинты

			// События
			on: {

			}
		});
	}
}
// Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
function initSlidersScroll() {
	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}

window.addEventListener("load", function (e) {
	// Запуск инициализации слайдеров
	initSliders();
	// Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
	//initSlidersScroll();
});

