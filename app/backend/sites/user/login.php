<?php
if (!session_id()) session_start();
require_once (getcwd() . '/libs/hash.php');
$hash = new Hash();
$flash = [
    'type' => '',
    'msg' => ''
];
if (!empty($_POST)) {
    $user_name = '';
    $pass = '';
    $success = true;

    if (!$_POST['user'] || $_POST['user'] == '') {
        $flash['type'] = 'error';
        $flash['msg'] = 'Please input user name';
        $success = false;
    } else {
        $user_name = $_POST['user'];
    }

    if (!$_POST['pass'] || $_POST['pass'] == '') {
        $flash['type'] = 'error';
        $flash['msg'] = 'Please input password';
        $success = false;
    } else {
        $pass = $_POST['pass'];
    }

    if ($success) {
        $flash = NULL;
        $sql = "SELECT salt FROM member WHERE username=:user_name";
        $db->query($sql);
        $db->bind([
            ':user_name' => $user_name
        ]);
        $salt = $db->findOne()['salt'];
        $pass = $hash->create($pass, $salt);

        $sql = "SELECT * FROM member WHERE username=:user_name AND password=:pass";
        $db->query($sql);
        $db->bind([
            ':user_name' => $user_name,
            ':pass' => $pass
        ]);
        $user = $db->findOne();

        if ($db->rowCount() == 1) {
            $_SESSION['user'] = $user;
            header("Location: http://" . HOST . "/admin");
            exit;
        } else {
            $_SESSION['flash'] = $flash;
            header("Location: http://" . HOST . "/admin/?m=user&a=login");
            exit;
        }
    }
    else {
        $_SESSION['flash'] = $flash;
        header("Location: http://" . HOST . "/admin/?m=user&a=login");
        exit;
    }
}
else {
    echo $twig->render('user/login.html');
}