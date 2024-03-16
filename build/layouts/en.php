<?php

$title = 'Startup — TALENTSPOT';
$description = 'Platform for automating the hiring process of skilled personnel';
$name = 'LLC «TalentSpot» (RU)';
$email = 'info@talentspot.ru';
$year = date("Y");

$rev = [
    "INN" => "2623034058",
    "KPP" => "262301001",
    "OGRN" => "1232600016065",
    "Email" => "info@talentspot.ru",
];

?>

<?= HEAD($title, $name, $description) ?>

<dialog class="modal__full">
	<section class="company__documents">
		<div class="container">
			<div class="modal__title">
				<i class="mdi mdi-arrow-left"></i>
				<h2>Company requisites</h2>
			</div>
			<div class="documents">
				<a target="_blank" href="./documents/inn.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Certificate INN</p>
						<span>inn.pdf</span>
					</div>
				</a>
				<a target="_blank" href="./documents/ustav.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Articles of Association</p>
						<span>ustav.pdf</span>
					</div>
				</a>
				<a target="_blank" href="./documents/vip.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Extract from the EGRUL</p>
						<span>vip.pdf</span>
					</div>
				</a>
				<a target="_blank" href="./documents/diplom.pdf?v=<?= date('YmdHis') ?>">
					<img src="./img/frame/PDF.png" alt="">
					<div>
						<p>Diploma</p>
						<span>diplom.pdf</span>
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
			<span>We use cookies to personalize our services and to make it easier for you to use the website.
			more convenient. By continuing to use the website, you agree to the use of cookies. If you do not want to use cookies, please change your browser settings.</span>
			<button class='cookie__ok'>Good</button>
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
					<a href='/'>RU</a>
					<i class='mdi mdi-menu mobile__menu__bth'></i>
				</div>
			</nav>
			<ul class='mobile__menu'>
				<li><a href="#about">About us</a></li>
				<li><a href="#service">Our services</a></li>
				<li><a href="#project">Our product</a></li>
				<li><a href="#client">Clients</a></li>
				<li><a class='create__contact'>Contacts</a></li>

				<li><a href="https://fasie.ru" target='_blank'>FASIE <i class="mdi mdi-arrow-top-right"></i></a></li>
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
						<li><a href="#about">About us</a></li>
						<li><a href="#project">Our product</a></li>
						<li><a href="#client">Clients</a></li>
						<li><a class='create__contact'>Contacts</a></li>
					</ul>
				</div>

				<div class="header__button">
					<!--<a class="link__button" href="https://talentspot.ru">Присоединиться <i class="mdi mdi-arrow-top-right"></i></a>-->
					<a class="link__button" href="/">На русском</a>
					<a class="link__button" href="https://fasie.ru" target='_blank'>FASIE <i class="mdi mdi-arrow-top-right"></i></a>

				</div>
			</nav>
		</div>
	</header>

	<section class="section section__header">
		<div class="container">
			<div class="head__title">
				<h1 class="wow fadeIn">Platform for automating the hiring process of <span>skilled</span> personnel</h1>
				<div class="header__resume wow slideInRight">
					<div class="hr-top">
						<img src="./img/frame/image-room.png?v=<?= date('YmdHis') ?>" alt="">
						<div>
							<span>Ivan Ivanov</span>
							<p class="color__grey">C# developer</p>
						</div>
					</div>
					<div class="hr-bottom">
						<div title="Город"><i class="mdi mdi-map-marker color__grey"></i> City of Moscow</div>
						<div title="Опыт работы"><i class="mdi mdi-briefcase color__grey"></i> 4 years</div>
						<div title="Образование"><i class="mdi mdi-school color__grey"></i> Higher</div>
						<div title="Образование"><i class="mdi mdi-face-recognition color__grey"></i> 26 years old</div>
					</div>
				</div>
			</div>
			<div class="head__img wow fadeIn">
				<video no-controls muted autoplay loop playsinline>
					<source src="./img/compressed-anim.mp4?v=<?= date('YmdHis') ?>" type="video/mp4">
				</video>
				<a href="./documents/diplom.pdf?v=<?= date('YmdHis') ?>" target="_blank">* with the support of the Foundation for Assistance to Innovations under the Student Startup Program</a>
			</div>
		</div>
	</section>

	<section class="section section__about" id="about">

		<img class="global__img-left" src="./img/frame/right.png?v=<?= date('YmdHis') ?>" alt="">

		<img class="global__img-right" src="./img/frame/Union.png?v=<?= date('YmdHis') ?>" alt="">

		<div class="container">
			<div class="container__title wow fadeIn">
				<h2>Who are we?</h2>
			</div>
			<article class="container__content">
				<div class="company__info wow fadeIn">
					<h3>TALENT <br> SPOT —</h3>
					<div> <?= $name ?> a young startup company. <br> We focus on creating digital solutions that are useful for Russia</div>
				</div>
				<div class="company__cart">

					<a class="wow fadeIn" target="_blank" href="./documents/top.pdf?v=<?= date('YmdHis') ?>">
                        <span class="company__top">
                            TOP <span>1000</span>
                        </span>
						<span class="company__exp">we are on the list of Russia's best startups for 2023</span>
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
						<span class="stack__title">Our technology stack</span>
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
				<h2>Our <span>services</span></h2>
			</div>
			<article class="container__content wow fadeIn">
				<div class='services'>
					<div class="services__item">
						<h3>Web development</h3>
						<p>Developing unique and demanding web applications and websites</p>
						<a class="link__button" href="mailto:<?= $email ?>">Contact us <i class="mdi mdi-arrow-top-right"></i></a>
						<img src="./img/frame/service_1.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
					<div class="services__item">
						<h3>Startup <span>TALENTSPOT</span> </h3>
						<p>Platform for automating the process of hiring qualified personnel</p>
						<a class="link__button" target="_blank" href="./documents/diplom.pdf?v=<?= date('YmdHis') ?>">Diploma <i class="mdi mdi-arrow-top-right"></i></a>
						<img src="./img/frame/service_2.png?v=<?= date('YmdHis') ?>" alt="">
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="section section__slider" id="project">
		<div class="container">
			<div class="container__title">
				<h2 class="wow fadeIn">Startup <span>TALENTSPOT</span></h2>
			</div>
			<article class="container__content">
				<div class="section__slider__container">
					<div class="project__text wow fadeIn">

						We will only provide specialists, which will
						allowing you to focus on what's most important - the development
						your business, without being distracted by a long search for the right candidate

					</div>
					<div class="slider__wrapper wow fadeIn">
						<div class="owl-carousel owl-theme">
							<div class="item slider__item">
								<h4 class="slider__title">Rating</h4>
								<p class="slider__text">Building the reputation of candidates on a point system</p>
								<img class="img__q3" src="./img/frame/q3.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Hiring automation</h4>
								<p class="slider__text">Automate hiring with auto-filtering and a chatbot</p>
								<img class="img__q1" src="./img/frame/q1.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Personnel reserve</h4>
								<p class="slider__text">Store specialist resumes for the future</p>
								<img class="img__q2" src="./img/frame/q2.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Specialists</h4>
								<p class="slider__text">Resumes of qualified personnel only</p>
								<img class="img__q4" src="./img/frame/q4.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Managers</h4>
								<p class="slider__text">Delegate vacancies between employees</p>
								<img class="img__q5" src="./img/frame/q5.png?v=<?= date('YmdHis') ?>" alt="">
							</div>
							<div class="item slider__item">
								<h4 class="slider__title">Chat</h4>
								<p class="slider__text">Always in touch with the candidate</p>
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
				<h2 class="wow fadeIn">The service is <span>customized</span> to meet the needs of customers</h2>
			</div>
			<article class="container__content">
				<div class="device__wrapper">
					<div class="device__block">
						<div class="device__text wow fadeIn">
							<h3>UP-TO-DATE INFORMATION</h3>
							<span>Selection of suitable vacancies and CVs</span>
							<p>You will be able to use a variety of filters to search for jobs and resumes, including industry, experience level, location and type of employment, etc.</p>
						</div>
						<div class='slot__success wow bounceIn' data-wow-delay="400ms">
							<span><i class="mdi mdi-check-bold"></i></span>
							To apply for a job
						</div>
						<div class='slot__industry wow bounceIn' data-wow-delay="600ms">
							<span>Industries</span>
							<ul>
								<li>IT Technologies</li>
								<li>Agriculture</li>
								<li>Medicine</li>
								<li>Industry</li>
								<li>Jurisprudence</li>
								<li>More than 20 industries</li>
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
							<h3>WIDE FUNCTIONALITY</h3>
							<span>Only useful features have been collected</span>
							<p>A functional personal account will help you gather all the information and provide it in a convenient way.</p>
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
						<h2>Applicants</h2>
						<ul class="price__list">
							<li>
								<i class="mdi mdi-star-outline"></i>
								<div>
									<p>Rating system</p>
									<span>Maintain your reputation as a specialist: respond to vacancies, take tests and get references from former employers, - accumulate points and attract employers</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-tune-variant"></i>
								<div>
									<p>Resume Builder</p>
									<span>Create a quality resume with an easy-to-use user interface and a variety of fill-in templates</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-check-decagram-outline"></i>
								<div>
									<p>Proven employers</p>
									<span>We will verify information about each business or entrepreneur at the registration stage - only verified employers</span>
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
						<h2>Employers</h2>
						<ul class="price__list">
							<li>
								<i class="mdi mdi-account-tie-outline"></i>
								<div>
									<p>Only qualified personnel</p>
									<span>We will filter candidates at the registration stage - only applicants with proven competencies</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-currency-rub"></i>
								<div>
									<p>Tariffs with favorable conditions</p>
									<span>No need to pay separately for each vacancy and separately for access to the resume database - everything will be included in a single rate</span>
								</div>
							</li>
							<li>
								<i class="mdi mdi-robot-happy-outline"></i>
								<div>
									<p>Many services</p>
									<span>Various services to automate the hiring of qualified employees included in all tariffs</span>
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
					If you have any questions, please contact us for more details
				</h3>
				<a class="link__button" href="mailto:<?= $email ?>">Contact us <i class="mdi mdi-arrow-top-right"></i></a>
				<img src="./img/frame/pochta.png?v=<?= date('YmdHis') ?>" alt="">
			</div>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="footer__top">
                <span><i class="mdi mdi-copyright"></i>
                    <?= $year ?> Limited Liability Company «TalentSpot» (RU)</span>
				<span class='footer__top__email'>
                    <?= $email ?>
                </span>
			</div>
			<div class="footer__bottom">
				<a class="create__contact">Public documents</a>
				<span></span>
				<a href='http://fasie.ru' target='_blank'>Innovation Promotion Fund</a>
				<span></span>
				<a href='/en-privacy'>Privacy policy</a>
				<span></span>
				<a href='/'>На русском</a>
			</div>
		</div>
	</footer>
</main>

<?= FOOTER() ?>


