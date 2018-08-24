<?php
$id = $_GET['id'];
$sql = "SELECT * FROM post WHERE id=:id";
$db->query($sql);
$db->bind([
    ':id' => $id
]);
$row = $db->findOne();

$count = $db->rowCount();

if($count == 0 ) {
    header('Location: ' . HOST . '/?a=404');
} else {
    echo $twig->render('posts/detail.html', [
        'bg_image' => 'assets/img/post-bg.jpg',
        'site_heading' => 'About Me',
        'sub_heading' => 'I am Quynh',
        'item' => $row
    ]);
}