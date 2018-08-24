<?php
if (!session_id()) session_start();

$user = $_SESSION['user'];
$twig->addGlobal('user', $_SESSION['user']);
$twig->addGlobal('flash', $_SESSION['flash']);

$a = $_GET['a'];
$m = $_GET['m'];

if (!$user || $user['role'] != 1) {
    //redirect toi trang thong bao khong co quyen truy cap
    $m = 'user';
    $a = 'login';
}

if($m) {
    if($a) {
        $act = 'app/backend/sites/' . $m . '/' . $a . '.php';
        if(file_exists($act)) {
            include($act);
        } else {
            header("Location: http://" . HOST . "/admin/?a=404");
        }
    }
}
else {
    if($a) {
        $act = 'app/backend/sites/' .$a . '.php';
        if(file_exists($act)) {
            include ($act);
        } else {
            header("Location: http://" . HOST . "/admin/?a=404");
        }
    }
    else {
        include ('home.php');
    }
}