<?php
require_once (__DIR__ . '/libs/bootstrap.php');
$admin_pattern = '/^(\/admin)(\/)*((.)*)*/';
if(preg_match($admin_pattern, $_SERVER["REQUEST_URI"])) {
    include(getcwd() . '/app/backend/index.php');
} else {
    $templateDir = getcwd() .'/app/frontend/views';
    $cacheDir = getcwd() . '/caches';

    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, array(
        'cache' => $cacheDir,
        'auto_reload' => true,
        'debug' => true
    ));
    $twig->addExtension(new MyTwig());
    include_once('router.php');
}
