<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/pages/login.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая Жизнь | Авторизация</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.html" class="header-link">На главную</a>
        </div>
    </header>
    <main>
        <section>
            <?php

function showError($field) {
    if (!array_key_exists('auth-errors', $_SESSION)){
        echo '';
    } else {
        $listErrors = $_SESSION['auth-errors'];
        
        if (array_key_exists($field, $listErrors)){
            $error = implode (',', $listErrors[$field]);

            echo "<span class='error'> $error </span>";
        }
    }
 }
            ?>
            <form action="api/authUser.php" method="POST" class="login-form">
                <h1 class="login-form-title">Авторизация</h1>
                <label for="email">Email
                <?php
                    showError('email');
                ?>
                </label>
                <input name="email" type="email" id="email" placeholder="example@mail.com">
                <label for="password">Пароль
                <?php
                    showError('password');
                ?>
                </label>
                <input name="password" type="password" id="password">
                <button type="submit">Войти</button>
                <a href="register.php">Регистрация</a>
            </form>
        </section>
    </main>
</body>
</html>