<?php
//require('products_db.php');
require('auth.php');
require('db-connect.php');
$limit = 6;
$page = intval($_GET['page']) ?: 1;
$offset = ($page - 1) * $limit;
//Запрос для получения количества записей в таблице
$result = $conn->query("SELECT count(*) AS C FROM products");
$row = $result->fetch();
$products_quantity = $row['C'];
//Запрос для получения записей из таблицы
$result = $conn->query("SELECT * FROM products LIMIT " . $limit . " OFFSET " . $offset);

$pages = $products_quantity / $limit;
$pages_total = ceil($pages);

$months = [1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'];

$day = date('j');
$month = date('n');
$year = date('Y');

$today = $day . " " . $months[$month] . " " . $year;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин товаров для дома</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?
require('components/header.php');
?>
<section class="banner">
    <p>Маркетологи объявили <?= $today ?> года<br>самым удачным временем для покупок!</p>
</section>
<?
require('components/products_list.php');
require('components/message.php');
?>
<?
require('components/footer.php');
?>
</body>
</html>
