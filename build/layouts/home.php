<?php

$title = 'Стартап — TALENTSPOT';
$description = 'Формируйте кадровый резерв из квалифицированного персонала с TALENTSPOT';
$keywords = '';
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

<!DOCTYPE html>
<!--[if lt IE 6 ]><html class="ie ie6" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 10 ]><html class="ie ie10" lang="ru" dir="ltr"> <![endif]-->
<!--[if (gte IE 11)|!(IE)]><!-->
<html lang="ru" dir="ltr" xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
<head>

    <meta charset="utf-8" />

    <!-- SEO -->
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords ?>" />
    <link rel="canonical" href="startup.talentspot.ru" />
    <meta http-equiv="content-language" content="ru" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />

    <meta name="author" content="<?= $name ?>" />
    <meta name="copyright" content="<?= $name ?>" />

    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:url" content="startup.talentspot.ru" />

    <meta property="twitter:title" content="<?= $title ?>" />
    <meta property="twitter:description" content="<?= $description ?>" />
    <meta property="twitter:url" content="startup.talentspot.ru" />

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $title ?>" />

    <meta name="twitter:domain" content="startup.talentspot.ru" />
    <meta name="twitter:site" content="@talentspot.ru" />
    <meta name="twitter:creator" content="@talentspot.ru" />

    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon"/>
    <link rel="icon" href="./img/favicon.png" type="image/x-icon"/>
    <!-- / SEO  -->

    <!-- SCRIPT FOR OLD BROWSERS -->
    <script type="text/javascript">
        !function(){"use strict";function trackOldBrowserEvent(){var t=function createXmlHttpRequestObject(){var t;try{t=new XMLHttpRequest}catch(r){for(var e=new Array("MSXML2.XMLHHTP.11.0","MSXML2.XMLHHTP.10.0","MSXML2.XMLHHTP.9.0","MSXML2.XMLHHTP.8.0","MSXML2.XMLHHTP.7.0","MSXML2.XMLHHTP.6.0","MSXML2.XMLHHTP.5.0","MSXML2.XMLHHTP.4.0","MSXML2.XMLHHTP.3.0","MSXML2.XMLHHTP","Microsoft.XMLHHTP"),s=0;s<e.length&&!t;s++)try{t=new ActiveXObject(e[s])}catch(t){}}return null!=t?t:void 0}(),e=new Object;return e.open="/badbrowser?status="+(0!==t.status&&t.status),e.xhr=t.responseURL?t.responseURL:"/badbrowser?status="+(0!==t.status&&t.status),t.open("GET",e.open,!0),t.setRequestHeader("Content-Type","text/html"),t.setRequestHeader("X-Requested-With","XMLHttpRequest"),t.onreadystatechange=function(){if(4===t.readyState&&(t.status>=200&&t.status<300||304===t.status||0===t.status&&"file:"===protocol))try{location.replace(t.responseURL?t.responseURL:"/badbrowser?status="+t.status)}catch(t){}},t.send(e.xhr?e.xhr:null),t}!function checkOldBrowser(){if(document.body)try{"CSS"in window&&CSS.supports("display","flex")&&"undefined"!=typeof Symbol||trackOldBrowserEvent()}catch(t){}else setTimeout(checkOldBrowser,100)}()}();
    </script>
    <!-- / SCRIPT FOR OLD BROWSERS -->

    <!-- INCLUDE LIBS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- / INCLUDE LIBS -->

    <!-- INCLUDE ICONS AND FRONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css"
          integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- / INCLUDE ICONS AND FRONTS -->

    <link rel="stylesheet" href="./lk.bundle.css">

</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(96541801, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96541801" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<dialog class="modal__full">
    <section class="company__documents">
        <div class="container">
            <div class="modal__title">
                <i class="mdi mdi-arrow-left"></i>
                <h2>Реквизиты компании</h2>
            </div>
            <div class="documents">
                <a target="_blank" href="./documents/inn.pdf">
                    <img src="./img/frame/PDF.png" alt="">
                    <div>
                        <p>Свидетельство ИНН</p>
                        <span>inn.pdf</span>
                    </div>
                </a>
                <a target="_blank" href="./documents/ustav.pdf">
                    <img src="./img/frame/PDF.png" alt="">
                    <div>
                        <p>Устав общества</p>
                        <span>ustav.pdf</span>
                    </div>
                </a>
                <a target="_blank" href="./documents/vip.pdf">
                    <img src="./img/frame/PDF.png" alt="">
                    <div>
                        <p>Выписка из ЕГРЮЛ</p>
                        <span>vip.pdf</span>
                    </div>
                </a>
            </div>
            <div class="cart__info">

                <article>
                    <span><img src="./img/logo/white/png/512x512.png" alt=""> <?= $name ?></span>
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
    <footer id="footer__modal" class="footer">
        <div class="container">
            <div class="footer__top">
                <span>
                    <i class="mdi mdi-copyright"></i>
                    <?= $year ?> <?= $name ?>
                </span>
                <span>
                    Стать партнером: <?= $email ?>
                </span>
            </div>
            <div class="footer__bottom">
                <a class="create__contact" href='http://fasie.ru' target='_blank'>Фонд содействиям инновациям</a>
            </div>
        </div>
    </footer>
</dialog>

<main class="wrapper" id="wrapper">

    <header id="header">
        <div class="container">
            <nav class="header__nav">
                <div class="header__logo wow fadeIn">
                    <img src="./img/logo/black/png/512x512.png" alt="">
                    TALENTSPOT
                </div>

                <div class="header__menu wow fadeIn">
                    <ul>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#project">Наш проект</a></li>
                        <li><a href="#client">Клиентам</a></li>
                    </ul>
                </div>

                <div class="header__button wow fadeIn">
                    <!--<a class="link__button" href="https://talentspot.ru">Присоединиться <i class="mdi mdi-arrow-top-right"></i></a>-->
                    <a class="link__button" href="https://fasie.ru" target='_blank'>ФСИ <i class="mdi mdi-arrow-top-right"></i></a>
                    <a class="link__button create__contact">Контакты</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="section section__header">
        <div class="container">
            <div class="head__title">
                <h1 class="wow fadeIn">Формируйте кадровый резерв из <span>квалифицированного</span> персонала с TALENTSPOT</h1>
                <div class="header__resume wow slideInRight">
                    <div class="hr-top">
                        <img src="./img/frame/image-room.png" alt="">
                        <div>
                            <span>Юрий Семецкий</span>
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
                <a href="https://fasie.ru/" target="_blank">* при поддержке «Фонда содействия инновациям» в рамках программы «Студенческий стартап»</a>
            </div>
        </div>
    </section>

    <section class="section section__about" id="about">

        <img class="global__img-left" src="./img/frame/right.png" alt="">

        <img class="global__img-right" src="./img/frame/Union.png" alt="">

        <div class="container">
            <div class="container__title wow fadeIn">
                <h2>Кто мы?</h2>
            </div>
            <article class="container__content">
                <div class="company__info wow fadeIn">
                    <h3>TALENT <br> SPOT —</h3>
                    <div> <?= $name ?> молодая стартап-компания. <br> Мы фокусируемся на создании инновационных решений полезных для России</div>
                </div>
                <div class="company__cart">
                    <div class="wow fadeIn">
                        <span class="company__top">
                            <span>1 млн</span> <i class="mdi mdi-currency-rub"></i>
                        </span>
                        <span class="company__exp">поддержка на развитие от Фонда содействия инновациям</span>
                    </div>
                    <a class="wow fadeIn" target="_blank" href="./documents/top.pdf">
                        <span class="company__top">
                            ТОП <span>1000</span>
                        </span>
                        <span class="company__exp">мы в списке лучших стартапов России за 2023 год</span>
                    </a>
                    <div class="wow fadeIn">
                        <div class="stack__list">
                            <p>Python</p>
                            <p>TypeScript</p>
                            <p>NodeJS</p>
                            <p>Django</p>
                            <p>ReactJS</p>
                            <p>Celery</p>
                            <p>PostgreSQL</p>
                        </div>
                        <span class="stack__title">Наш стек технологий</span>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="section section__slider" id="project">
        <div class="container">
            <div class="container__title">
                <h2 class="wow fadeIn">Собрали только лучшее </h2>
            </div>
            <article class="container__content">
                <div class="section__slider__container">
                    <div class="project__text wow fadeIn">
                        Мы предоставляем только самых подходящих кандидатов, что
                        позволяет вам сосредоточиться на самом важном — развитии
                        вашего бизнеса, не отвлекаясь на долгий поиск стоящего кандидата

                    </div>
                    <div class="slider__wrapper wow fadeIn">
                        <div class="owl-carousel owl-theme">
                            <div class="item slider__item">
                                <h4 class="slider__title">Автоматизация найма</h4>
                                <p class="slider__text">Автоматизируйте найм с автоподбором и чат-ботом</p>
                                <img class="img__q1" src="./img/frame/q1.png" alt="">
                            </div>
                            <div class="item slider__item">
                                <h4 class="slider__title">Кадровый резерв</h4>
                                <p class="slider__text">Храните резюме специалистов на будущее</p>
                                <img class="img__q2" src="./img/frame/q2.png" alt="">
                            </div>
                            <div class="item slider__item">
                                <h4 class="slider__title">Рейтинг</h4>
                                <p class="slider__text">Сертификация кандидатов по балльной системе</p>
                                <img class="img__q3" src="./img/frame/q3.png" alt="">
                            </div>
                            <div class="item slider__item">
                                <h4 class="slider__title">Специалисты</h4>
                                <p class="slider__text">Резюме только квалифицированных кадров</p>
                                <img class="img__q4" src="./img/frame/q4.png" alt="">
                            </div>
                            <div class="item slider__item">
                                <h4 class="slider__title">Менеджеры</h4>
                                <p class="slider__text">Делегируйте вакансии между сотрудниками</p>
                                <img class="img__q5" src="./img/frame/q5.png" alt="">
                            </div>
                            <div class="item slider__item">
                                <h4 class="slider__title">Чат</h4>
                                <p class="slider__text">Всегда на связи с кандидатом</p>
                                <img class="img__q6" src="./img/frame/q6.png" alt="">
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
                <h2 class="wow fadeIn">Сервис подстраивается под запросы клиентов</h2>
            </div>
            <article class="container__content">
                <div class="device__wrapper">
                    <div class="device__block">
                        <div class="device__text wow fadeIn">
                            <h3>АКТУАЛЬНАЯ ИНФОРМАЦИЯ</h3>
                            <span>Подборка подходящих вакансий и резюме</span>
                            <p>Для поиска вакансий можно использовать различные фильтры, включая отрасль, уровень опыта, местоположение и тип занятости. Каждый соискать, находящийся в поисках работы сможет найти подходящую вакансию.</p>
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
                            <img class="wow slideInUp" src="./img/device/iPhone%2015%20Black.png" alt="talentspot mobile">
                        </div>
                    </div>
                    <div class="device__block">
                        <div class="device__img wow fadeIn">
                            <img class="wow slideInRight" src="./img/device/Group%201000006943.png" alt="talentspot mobile">
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
                                    <span>Создайте качественное резюме с помощью удобного пользовательского интерфейса и различных шаблонов заполнения</span>
                                </div>
                            </li>
                            <li>
                                <i class="mdi mdi-check-decagram-outline"></i>
                                <div>
                                    <p>Проверенные работодатели</p>
                                    <span>Мы проверяем информацию о каждом предприятии или предпринимателе на этапе регистрации, только подтвержденные работодатели</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wow fadeIn">
                        <img src="./img/frame/Frame%201261155139.png" alt="">
                    </div>
                </div>
                <div class="price__block wow fadeIn">
                    <div class="wow fadeIn">
                        <img src="./img/frame/Frame%201261155140.png" alt="">
                    </div>
                    <div class="price__content wow fadeIn">
                        <h2>Работодателям</h2>
                        <ul class="price__list">
                            <li>
                                <i class="mdi mdi-account-tie-outline"></i>
                                <div>
                                    <p>Только квалифицированные кадры</p>
                                    <span>Мы проводим фильтрацию кандидатов на этапе регистрации, будут только соискатели с подтвержденными компетенциями</span>
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
                <img src="./img/frame/pochta.png" alt="">
            </div>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__top">
                <span>
                    <i class="mdi mdi-copyright"></i>
                    <?= $year ?> <?= $name ?>
                </span>
                <span>
                    Стать партнером: <?= $email ?>
                </span>
            </div>
            <div class="footer__bottom">
                <a class="create__contact">Открытые документы</a>
                <span></span>
                <a href='http://fasie.ru' target='_blank'>Фонд содействиям инновациям</a>
            </div>
        </div>
    </footer>
</main>

<!-- INCLUDE SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>new WOW().init()</script>

<script src="./lk.bundle.js"></script>
<!-- / INCLUDE SCRIPTS -->
</body>
<body>
