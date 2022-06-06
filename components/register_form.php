<section class="form">
    <h1 class="catalog-title">Регистрация</h1>

    <form method="post" action="..\register.php">
        <p>
            <label for="id1">Логин:</label>
            <input type="text" name="login" id="id1">
        </p>
        <p>
            <label for="id3">Имя:</label>
            <input type="text" name="firstname" id="id3">
        </p>
        <p>
            <label for="id4">Фамилия:</label>
            <input type="text" name="lastname" id="id4">
        </p>
        <p>
            <label for="id2">Пароль:</label>
            <input type="password" name="password" id="id2">
        </p>
        <input type="hidden" name="new" value="1">
        <?php require('components/message.php'); ?>
        <p><input type="submit" value="Зарегистрироваться"></p>
    </form>
</section>