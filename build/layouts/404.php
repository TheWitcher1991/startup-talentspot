<?php

$title = 'Ошибка 404 — TalentSpot';
$description = 'Платформа автоматизации процесса найма квалифицированного персонала';
$keywords = '';
$name = 'ООО «ТалентСпот»';

?>

<?= HEAD($title, $name, $keywords, $description) ?>

<!-- MAIN CONTENT -->
<main id="wrapper" class="wrapper">
    <div class="global__error">

        <div class="global__error-left">
            <h1>Такой страницы нет</h1>
            <span>Ошибка 404 :(</span>
            <p>К сожалению, страница не найдена <br> Такой страницы не существует, либо она была не удалена</p>
            <div>
                <a href="/">TALENTSPOT</a>
            </div>
        </div>

        <div class="global__error-right">
            <img src="./img/404.png" alt="">
        </div>

    </div>
</main>
<!-- / MAIN CONTENT -->

<?= FOOTER() ?>