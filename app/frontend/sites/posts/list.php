<?php
$page = (isset($_GET['page']) ? $_GET['page'] : 1 );
$limit = 3;
$offset = ($page - 1)*$limit;

$sql = "SELECT * FROM post WHERE title!='about' AND published=1 ORDER BY id DESC LIMIT :limit OFFSET :offset ";
$db->query($sql);
$db->bind([
    ':offset' => $offset,
    ':limit' => $limit
]);
$rows = $db->findAll();

$sql = "SELECT COUNT(*) FROM post WHERE title!='about' AND published=1";
$db->query($sql);
$totalItems = $db->findOne()['count'];
$totalPage = ceil($totalItems / $limit);

echo $twig->render('posts/list.html', [
    'bg_image' => 'assets/img/post-bg.jpg',
    'site_heading' => 'Blog',
    'sub_heading' => 'All Post',
    'items' => $rows,
    'totalPage' => $totalPage,
    'currentPage' => $page
]);