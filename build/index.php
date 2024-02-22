<?php

ob_start();

include_once './layouts/function.php';

if ($_SERVER['REQUEST_URI'] === '/') {
    $Page = 'home';
    $Module = 'home';
} else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));

    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);

    if (!empty($Module)) {
        $Param = array();

        foreach ($URL_Parts as $i => $iValue) {
            $Param[$iValue] = $URL_Parts[++$i];
        }
    } else {
        $Module = '';
    }
}

if (in_array($Page, ['home'])) {
    include 'layouts/' . $Page . '.php';
} else {
    include 'layouts/404.php';
}

ob_end_flush()

?>


