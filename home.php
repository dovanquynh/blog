<?php
$sql = "SELECT * FROM post WHERE title!='about' ORDER BY id DESC LIMIT 4";
$db->query($sql);
$rows = $db->findAll();

echo $twig->render('home.html', [
    'bg_image' => 'assets/img/home-bg.jpg',
    'site_heading' => 'Blog',
    'sub_heading' => 'Welcome to MySite',
    'items' => $rows
]);