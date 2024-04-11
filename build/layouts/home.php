<?php

$title = 'Стартап — TALENTSPOT';
$description = 'Платформа автоматизации процесса найма квалифицированного персонала';
$name = 'ООО «ТалентСпот»';
$email = 'info@talentspot.ru';
$year = date("Y");

$rev = [
    "ИНН" => "2623034058",
    "КПП" => "262301001",
    "ОГРН" => "1232600016065",
    "Email" => "info@talentspot.ru",
];

?>

<?= HEAD($title, $name, $description) ?>

<dialog class="modal__full">
	<section class="company__documents">
		<div class="container">
			<div class="modal__title">
				<i class="mdi mdi-arrow-left"></i>
				<h2>Реквизиты компании</h2>
			</div>
			<div class="documents">
				<a target="_blank" href="./documents/inn.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Свидетельство ИНН</p>
						<span>inn.pdf</span>
					</div>
				</a>
				<a target="_blank" href="./documents/ustav.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Устав общества</p>
						<span>ustav.pdf</span>
					</div>
				</a>
				<a target="_blank" href="./documents/vip.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Выписка из ЕГРЮЛ</p>
						<span>vip.pdf</span>
					</div>
				</a>




			</div>
			<div class="cart__info">

				<article>
					<span><?= $name ?></span>
				</article>
				<div class="cart__grid">
                    <?php

                    foreach ($rev as $key => $val) {
                        ?>
						<div>
							<span><?= $key ?></span>
							<p><?= $val ?></p>
						</div>
                        <?php
                    }

                    ?>
				</div>
			</div>
		</div>
	</section>
</dialog>

<main class="wrapper" id="wrapper">

	<div class='cookie__block'>
		<div class='container cookie__flex'>
			<span>Мы используем файлы cookie с целью персонализации сервисов и чтобы пользоваться веб-сайтом
			было удобнее. Продолжив работу с сайтом, вы соглашаетесь с использованием файлов cookie. Если вы не хотите использовать файлы cookie, измените настройки браузера.</span>
			<button class='cookie__ok'>Понятно</button>
		</div>
	</div>

	<div class='arrow__up'>
		<i class='mdi mdi-arrow-up'></i>
	</div>

	<section class="section__mobile">
		<div class='container'>
			<nav class='mobile__nav'>
				<div class="header__logo">
					<img src="./img/logo/166666/png/512x512.png?v=<?= date('YmdHis') ?>" alt="">
					TALENTSPOT
				</div>
				<div class='mobile__nav__button'>
					<a href='/en'>EN</a>
					<i class='mdi mdi-menu mobile__menu__bth'></i>
				</div>
			</nav>
			<ul class='mobile__menu'>
				<li><a href="#about">О нас</a></li>
				<li><a href="#service">Наши услуги</a></li>
				<li><a href="#project">Наш продукт</a></li>
				<li><a href="#client">Клиентам</a></li>
				<li><a class='create__contact'>Контакты</a></li>

				<li><a href="https://fasie.ru" target='_blank'>Фонд <i class="mdi mdi-arrow-top-right"></i></a></li>
			</ul>
		</div>
	</section>

	<header id="header">
		<div class="container">
			<nav class="header__nav">
				<div class="header__logo">
					<img src="./img/logo/166666/png/512x512.png?v=<?= date('YmdHis') ?>" alt="">
					TALENTSPOT
				</div>

				<div class="header__menu">
					<ul>
						<li><a href="#about">О нас</a></li>
						<li><a href="#project">Наш продукт</a></li>
						<li><a href="#client">Клиентам</a></li>
						<li><a class='create__contact'>Контакты</a></li>
					</ul>
				</div>

				<div class="header__button">
					<!--<a class="link__button" href="https://talentspot.ru">Присоединиться <i class="mdi mdi-arrow-top-right"></i></a>-->
					<a class="link__button" href="/en">In english</a>
					<a class="link__button" href="https://fasie.ru" target='_blank'>ФСИ <i class="mdi mdi-arrow-top-right"></i></a>
				</div>
			</nav>
		</div>
	</header>

	<section class="section section__header">
		<div class="container">
			<div class="head__title">
				<h1 class="wow fadeIn">Платформа автоматизации процесса найма <span>квалифицированного</span> персонала</h1>
				<div class="header__resume wow slideInRight">
					<div class="hr-top">
						<img src="./img/frame/image-room.png?v=<?= date('YmdHis') ?>" alt="">
						<div>
							<span>Иван Иванов</span>
							<p class="color__grey">C# разработчик</p>
						</div>
					</div>
					<div class="hr-bottom">
						<div title="Город"><i class="mdi mdi-map-marker color__grey"></i> Ставрополь</div>
						<div title="Опыт работы"><i class="mdi mdi-briefcase color__grey"></i> 4 года</div>
						<div title="Образование"><i class="mdi mdi-school color__grey"></i> Высшее</div>
						<div title="Образование"><i class="mdi mdi-face-recognition color__grey"></i> 26 лет</div>
					</div>
				</div>
			</div>
			<div class="head__img wow fadeIn">
				<video no-controls muted autoplay loop playsinline>
					<source src="./img/compressed-anim.mp4?v=<?= date('YmdHis') ?>" type="video/mp4">
				</video>
				<a href="./documents/diplom.pdf?v=<?= date('YmdHis') ?>" target="_blank">* при поддержке «Фонда содействия инновациям» в рамках программы «Студенческий стартап»</a>
			</div>
		</div>
	</section>

	<section class="section section__about" id="about">

		<img class="global__img-left" src="./img/frame/right.png?v=<?= date('YmdHis') ?>" alt="">

		<img class="global__img-right" src="./img/frame/Union.png?v=<?= date('YmdHis') ?>" alt="">

		<div class="container">
			<div class="container__title wow fadeIn">
				<h2>Кто мы?</h2>
			</div>
			<article class="container__content">
				<div class="company__info wow fadeIn">
					<h3>TALENT <br> SPOT —</h3>
					<div> <?= $name ?> молодая аккредитованная ИТ-компания. <br> Мы фокусируемся на создании цифровых решений полезных для России</div>
				</div>
				<div class="company__cart">
					<a class="wow fadeIn" target="_blank" href="./documents/top.pdf?v=<?= date('YmdHis') ?>">
                        <span class="company__top">
                            ТОП <span>1000</span>
                        </span>
						<span class="company__exp">мы в списке лучших стартапов России за 2023 год</span>
					</a>
					<div class="wow fadeIn">
						<div class="stack__list">
							<p>Python</p>
							<p>Django</p>
							<p>PHP</p>
							<p>NodeJS</p>
							<p>JavaScript</p>
							<p>TypeScript</p>
							<p>React</p>
							<p>Docker</p>
							<p>Nginx</p>
							<p>MySQL</p>
							<p>PostgreSQL</p>
						</div>
						<span class="stack__title">Наш стек технологий</span>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__service" id="service">

		<img class="global__img-left" src="./img/frame/right.png?v=<?= date('YmdHis') ?>" alt="">

		<img class="global__img-right" src="./img/frame/Union.png?v=<?= date('YmdHis') ?>" alt="">

		<div class="container">
			<div class="container__title wow fadeIn">
				<h2>Наши <span>услуги</span></h2>
			</div>
			<article class="container__content wow fadeIn">
				<div class='services'>
					<div class="services__item">
						<h3>Веб-разработка</h3>
						<p>Кроме нашего главного продукта, мы ориентированы на создание уникальных веб-приложений и сайтов</p>
						<img src="./img/frame/service_1.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
					<div class="services__item">
						<h3>Стартап <span>TALENTSPOT</span></h3>
						<p>Платформа автоматизации процесса найма квалифицированного персонала</p>
						<a class="link__button" target="_blank" href="./documents/diplom.pdf?v=<?= date('YmdHis') ?>">Диплом <i class="mdi mdi-arrow-top-right"></i></a>
						<img src="./img/frame/service_2.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__slider" id="project">
		<div class="container">
			<div class="container__title">
				<h2 class="wow fadeIn">Стартап <span>TALENTSPOT</span></h2>
			</div>
			<article class="container__content">
				<div class="section__slider__container">
					<div class="project__text wow fadeIn">

						Мы будем предоставлять только специалистов, что
						позволит вам сосредоточиться на самом важном — развитии
						вашего бизнеса, не отвлекаясь на долгий поиск подходящего кандидата

					</div>
					<div class="slider__wrapper wow fadeIn">
						<div class="owl-carousel owl-theme">
							<div class="item slider__item">
								<h4 class="slider__title">Рейтинг</h4>
								<p class="slider__text">Выстраивание репутации кандидатов по балльной системе</p>
								<img class="img__q3" src="./img/frame/q3.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Автоматизация найма</h4>
								<p class="slider__text">Автоматизируйте найм с авто-фильтрацией и чат-ботом</p>
								<img class="img__q1" src="./img/frame/q1.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Кадровый резерв</h4>
								<p class="slider__text">Храните резюме специалистов на будущее</p>
								<img class="img__q2" src="./img/frame/q2.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Специалисты</h4>
								<p class="slider__text">Резюме только квалифицированных кадров</p>
								<img class="img__q4" src="./img/frame/q4.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Менеджеры</h4>
								<p class="slider__text">Делегируйте вакансии между сотрудниками</p>
								<img class="img__q5" src="./img/frame/q5.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Чат</h4>
								<p class="slider__text">Всегда на связи с кандидатом</p>
								<img class="img__q6" src="./img/frame/q6.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__device">
		<div class="container">
			<div class="container__title">
				<h2 class="wow fadeIn">Платформа <span>подстраивается</span> под запросы клиентов</h2>
			</div>
			<article class="container__content">
				<div class="device__wrapper">
					<div class="device__block">
						<div class="device__text wow fadeIn">
							<h3>АКТУАЛЬНАЯ ИНФОРМАЦИЯ</h3>
							<span>Подборка подходящих вакансий и резюме</span>
							<p>Для поиска вакансий и резюме можно будет использовать различные фильтры, включая отрасль, уровень опыта, местоположение и тип занятости и т.д.</p>
						</div>
						<div class='slot__success wow bounceIn' data-wow-delay="400ms">
							<span><i class="mdi mdi-check-bold"></i></span>
							Ваш отклик отправлен!
						</div>
						<div class='slot__industry wow bounceIn' data-wow-delay="600ms">
							<span>Отрасли</span>
							<ul>
								<li>ИТ-Технологии</li>
								<li>Сельское хозяйство</li>
								<li>Медицина</li>
								<li>Промышленность</li>
								<li>Юриспруденция</li>
								<li>Более 20 отраслей</li>
							</ul>
						</div>
						<div class="device__img wow fadeIn">
							<img class="wow slideInUp" src="./img/device/iPhone%2015%20Black.png?v=<?= date('YmdHis') ?>" alt="talentspot mobile">
						</div>
					</div>
					<div class="device__block">
						<div class="device__img wow fadeIn">
							<img class="wow slideInRight" src="./img/device/Group%201000006943.png?v=<?= date('YmdHis') ?>" alt="talentspot mobile">
						</div>
						<div class="device__text wow fadeIn">
							<h3>ШИРОКИЙ ФУНКЦИОНАЛ</h3>
							<span>Собрали только полезные функции</span>
							<p>Функциональный личный кабинет поможет собрать всю информацию и предоставить её в удобном для Вас виде.</p>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__price" id='client'>
		<div class="container">
			<article class="container__price">
				<div class="price__block">
					<div class="price__content wow fadeIn">
						<h2>Специалистам</h2>
						<ul class="price__list">
							<li>
								<i class="mdi mdi-star-outline"></i>
								<div>
									<p>Рейтинговая система</p>
									<span>Поддерживайте репутацию специалиста: откликайтесь на вакансии, проходите тесты и получайте рекомендации от бывших работодателей, — копите баллы и привлекайте работодателей</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-tune-variant"></i>
								<div>
									<p>Конструктор резюме</p>
									<span>Создавайте качественное резюме с помощью удобного пользовательского интерфейса и различных шаблонов заполнения</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-check-decagram-outline"></i>
								<div>
									<p>Проверенные работодатели</p>
									<span>Мы будем проверять информацию о каждом предприятии или предпринимателе на этапе регистрации, — только подтвержденные работодатели</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="wow fadeIn">
						<img src="./img/frame/Frame%201261155139.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
				</div>
				<div class="price__block wow fadeIn">
					<div class="wow fadeIn">
						<img src="./img/frame/Frame%201261155140.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
					<div class="price__content wow fadeIn">
						<h2>Работодателям</h2>
						<ul class="price__list">
							<li>
								<i class="mdi mdi-account-tie-outline"></i>
								<div>
									<p>Только квалифицированные кадры</p>
									<span>Мы будем проводить фильтрацию кандидатов на этапе регистрации, — только соискатели с подтвержденными компетенциями</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-currency-rub"></i>
								<div>
									<p>Тарифы с выгодными условиями</p>
									<span>Не надо отдельно платить за каждую вакансию и отдельно за доступ к базе резюме — все будет включено в единый тариф</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-robot-happy-outline"></i>
								<div>
									<p>Множество сервисов</p>
									<span>Различные сервисы для автоматизации найма квалифицированных сотрудников, включенные во все тарифы</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__feedback">
		<div class="container">
			<div class="feedback__container wow fadeIn">
				<h3>
					Если у вас возникли вопросы, то свяжитесь с нами для уточнения подробностей
				</h3>
				<a class="link__button" href="mailto:<?= $email ?>">Связаться с нами <i class="mdi mdi-arrow-top-right"></i></a>
				<img src="./img/frame/pochta.png?v=<?= date('YmdHis') ?>" alt="">
			</div>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="footer__top">
                <span><i class="mdi mdi-copyright"></i>
                    <?= $year ?> Общество с ограниченной ответственностью «ТалентСпот»</span>
				<span class='footer__top__email'>
                    <?= $email ?>
                </span>
			</div>
			<div class="footer__bottom">
				<a class="create__contact">Контакты</a>
				<span></span>
				<a href='http://fasie.ru' target='_blank'>Фонд содействиям инновациям</a>
				<span></span>
				<a href='/privacy'>Политика конфиденциальности</a>
				<span></span>
				<a href='https://github.com/talentspot' target='_blank'>GitHub</a>
				<span></span>
				<a href='/en'>In english</a>
			</div>
		</div>
	</footer>
</main>

<?= FOOTER() ?>
