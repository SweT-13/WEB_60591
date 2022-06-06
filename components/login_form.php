<section class="form">
    <h1 class="catalog-title">Вход в систему</h1>

    <form method="post" action="..\login.php">
        <p>
            <label for="id1">Логин:</label>
            <input type="text" name="login" id="id1">

        </p>
        <p>
            <label for="id2">Пароль:</label>
            <input type="password" name="password" id="id2">
        </p>
        <?php require('components/message.php'); ?>
        <p><input type="submit" value="Войти"></p>
    </form>
</section>
