<?php 
session_start();
include_once 'api/bd.php';
if(array_key_exists('token',$_SESSION)){

    $token = $_SESSION['token'];
    $userId = $bd->query("
    SELECT id,type FROM users WHERE api_token = '$token'"
)->fetchAll();
if(empty($userId)){
    unset($_SESSION['token']);
    header('Location: login.php');
}else{
    $type = $userId[0]['type'];
    if($type != 'mod'){
        header('Location: index.php');
    }
}

}else{
    //Если токена не ма , то редеректим на главную странницу
    header('Location: index.php');
} 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/pages/moderator.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая Жизнь | Авторизация</title>
</head>
<body>
    <header>
        <div class="container">
          <a href="index.html">На главную</a>
        </div>
    </header>
    <main>
        <section class="filter">
            <div class="container">
            <form action="">
                <label for="date-form">От</label>
                <input type="date" name="date-form" id="date-form">
                <label for="date-to">До</label>
                <input type="date" name="date-to" id="date-to">
                <select name="type" id="type">
                    <option value="0">На модерации</option>
                    <option value="1">Активно</option>
                    <option value="2">Найдено</option>
                    <option value="3">В архиве</option>
                </select>
                <button type="submit">Поиск</button>
            </form>
        </div>
        </section>
        <section class="items">
            <div class="container">
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide">
                        <h3>Виталя Гачимучиков</h3>
                        <img src="img/DDD.jpeg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repudiandae dolorum, incidunt fugit voluptas magnam numquam. Modi dolores ipsum nam vel rerum tenetur eaque temporibus atque, iusto beatae et provident?</p>
                        <p>11.09.2001</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>