<?php
//require('products_db.php');
require('db-connect.php');
require('auth.php');
$id = $_GET['product_id'];
if ($id == 0) {
    header("Location: catalog.php");
}
$result = $conn->query("SELECT * FROM products WHERE id=" . $id);
$row = $result->fetch();
$title = $row['title'];
$img_url = $row['img_url'];
$price = $row['price'];
$colors = $row['colors'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Gloevk: <?= $title ?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?
require('components/header.php');
?>
<?
require('components/product_info.php');
require('components/message.php');
?>
<?
require('components/footer.php');
?>
</body>
</html>

