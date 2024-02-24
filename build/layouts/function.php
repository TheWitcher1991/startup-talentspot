<?php

function HEAD ($title, $name, $keywords, $description) {

    return '
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
        <title>'.$title.'</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta name="description" content="'.$description.'" />
        <meta name="keywords" content="'.$keywords.'" />
        <link rel="canonical" href="startup.talentspot.ru" />
        <meta http-equiv="content-language" content="ru" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="x-dns-prefetch-control" content="on" />

        <meta name="author" content="'.$name.'" />
        <meta name="copyright" content="'.$name.'" />

        <meta property="og:title" content="'.$title.'" />
        <meta property="og:description" content="'.$description.'" />
        <meta property="og:url" content="startup.talentspot.ru" />

        <meta property="twitter:title" content="'.$title.'" />
        <meta property="twitter:description" content="'.$description.'" />
        <meta property="twitter:url" content="startup.talentspot.ru" />

        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="'.$title.'" />

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

        <link rel="stylesheet" href="./lk.bundle.css?v='.date('YmdHis').'">

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

    ';

}

function FOOTER () {

    return '
    <!-- INCLUDE SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>new WOW().init()</script>

    <script src="./lk.bundle.js?v='.date('YmdHis').'"></script>
    <!-- / INCLUDE SCRIPTS -->
</body>
</html>
    ';

}

?>

