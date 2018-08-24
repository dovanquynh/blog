<?php
require_once (__DIR__ . '/libs/bootstrap.php');
$admin_pattern = '/^(\/admin)(\/)*((.)*)*/';
if(preg_match($admin_pattern, $_SERVER["REQUEST_URI"])) {
    $templateDir = getcwd() .'/app/backend/views';

    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, array(
        'auto_reload' => true,
        'debug' => true
    ));
    $twig->addExtension(new MyTwig());
    include(getcwd() . '/app/backend/router.php');
} else {
    include (getcwd() . '/app/frontend/index.php');
}