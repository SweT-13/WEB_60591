<?php
require('db-connect.php');
require('auth.php');
if ($_SESSION['username']) {
    header("Location: index.php");
}
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
<div class="container">
    <?
    require('components/register_form.php');
    ?>
    <p><a href="login.php">Войти</a></p>
</div>
<?
require('components/footer.php');
?>
</body>
</html>

