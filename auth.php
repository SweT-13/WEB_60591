<?php
session_start();


if ($_POST['login']) {
    $result = $conn->query("SELECT * FROM users WHERE login='" . $_POST['login'] . "'");
    if ($_POST['new']) {
        if ($row = $result->fetch()) {
            $message = 'Логин уже занят';
        } else {
            $conn->query("INSERT INTO users(firstname,lastname,login,password,is_admin)
                    VALUES ('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "'," . $_POST['login'] . ",'" . $_POST['password'] .$_POST['login']."123". "', 0 )");
            $_SESSION['message'] = 'Аккаунт создан';
            header('Location: login.php');
            die();
        }
    } else
        if ($row = $result->fetch()) {
            if ($_POST['password'] . $_POST['login'] . "123" == $row['password']) {
                $_SESSION['username'] = $_POST['login'];
                $_SESSION['id_auth_user'] = $row['id'];
                $_SESSION['admin'] = $row['is_admin'];
                header('Location: catalog.php');
            } else {
                $message = 'Неверный логин или пароль';
            }
        } else {
            $message = 'Неверный логин или пароль';
        }
}

if ($_GET['logout']) {
    session_unset();
    header('Location: login.php');
}