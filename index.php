<?php
require('db-connect.php');
require('auth.php');
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
<div>
    <?
    require('components/company_info.php');
    require('components/message.php');
    ?>
</div>
<?
require('components/footer.php');
?>
</body>
</html>
