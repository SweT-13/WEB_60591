<?
require('links.php');
?>
<header class="site-header">
    <nav class="site-navigation">
        <a class="logo-link" href="index.php">
            <img src="img/logo-full.svg" width="62" height="17" alt="Логотип магазина">
        </a>
        <ul class="navigation-list">
            <li><a href="<?= $link_catalog ?>">Каталог</a></li>
            <?php
            if ($_SESSION['username']) {

                if ($_SESSION['admin']) {
                    echo ('<li><a href="product_add.php">Добавить продукт</a></li>');;
                }

                echo ('<li><a href="login.php?logout=1">'.$_SESSION['username'].' (Выйти) </a></li>');
                echo ('<li><a href=" '.$link_cart.' "> Корзина</a></li>');
            }
            else {
                echo (' <li><a href="login.php">Войти</a></li>');
            }
            ?>

        </ul>
    </nav>
</header>