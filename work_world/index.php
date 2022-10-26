<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
	<main class="work-team-page">
			<section class="work-team-page__block-1 work-team-page-block-1">
				<div class="work-team-page-block-1__container">
					<h1 class="work-team-page-block-1__title"><?=GetMessage("WORK")?></h1>
					<div class="work-team-page-block-1__text">
						<?=GetMessage("WORK-TEXT")?>
					</div>
				</div>
			</section>
			<section class="work-team-page__block-2 work-team-page-block-2">
				<div class="work-team-page-block-2__container">
					<div class="work-team-page-block-2__text">
						<?=GetMessage("IMPLEMENTATION")?>
					</div>
					<h2 class="work-team-page-block-2__title"><?=GetMessage("BRIEFCASE")?></h2>
					<div class="work-team-page-block-2__items">
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("DIESEL")?> </div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>70 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type">
								<?=GetMessage("AVIATION")?> 
							</div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>35 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("AUTOMOBILE")?> </div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>45 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("NAPHTHA")?></div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>52 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("DESTILLERS")?></div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>60 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("BITUMEN")?></div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>85 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("MAZUT")?></div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>81 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type"><?=GetMessage("COKE")?></div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>84 %</span></div>
						</a>
						<a href="#" class="work-team-page-block-2__item">
							<div class="work-team-page-block-2__type">СУГ</div>
							<div data-watch data-watch-once class="work-team-page-block-2__value"><span>65 %</span></div>
						</a>
					</div>
				</div>
			</section>
			<section class="work-team-page__block-3 work-team-page-block-3">
				<div class="work-team-page-block-3__container">
					<h2 class="work-team-page-block-3__title">Присутствие «RISE OIL GROUP»</h2>
					<div class="work-team-page-block-3__text">
						<p>
							Мы ежедневно осуществляем регулярные торговые операции по поставкам нефти и нефтепродуктов
							в 15 странах Мира, и ведем активную деятельность в России и в странах Средней, Южной и Восточной Азии,
							Средней и Юго-Восточной Европы, Восточной Европы, Северной и Восточной Африки
							и на Ближнем Востоке.
						</p>
						<p>
							Наши Департаменты координации экспортных поставок и логистики постоянно ведут активную работу
							над расширением международной географии деятельности и диверсификацией маршрутов логистики
							в страны дальнего и ближнего зарубежья. Мы нацелены на эффективные методы сотрудничества,
							для достижения наибольших результатов.
						</p>
					</div>
					<div class="work-team-page-block-3__map">
						
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(),
							false
							);?>
					</div>
				</div>
			</section>
		</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>