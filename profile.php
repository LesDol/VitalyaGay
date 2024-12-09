<?php 
session_start();
include_once 'api/bd.php';
if(array_key_exists('token',$_SESSION)){

    $token = $_SESSION['token'];
    $userId = $bd->query("
    SELECT id FROM users WHERE api_token = '$token'"
)->fetchAll();
if(empty($userId)){
    unset($_SESSION['token']);
    header('Location: login.php');
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
    <link rel="stylesheet" href="styles/pages/profile.css">
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="stylesheet" href="modules/css/font-awesome.min.css">
    <title>Новая Жизнь | Профиль</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php" class="header-link">На главную</a>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info_item">
                    <img src="img/DDD.jpeg" alt="" class="icon">
                </div>
                <div class="info_item">
                    <ul>
                        <li>Номер телефона 8 (923) 666 66 66</li>
                        <li>Email:ldfjgkldfgj@mail.ru</li>
                        <li>Количество добавленных объявлений : 10</li>
                        <li><i  class="fa fa-paw"  aria-hidden="true"></i>Количество животных, которые вернулись к хозяевам : 5</li>
                        <li>Дата регистрации: 11.09.2001</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="negry">
                <h2>Объявления</h2>
                <select name="type" id="type">
                    <option value="">Активно</option>
                    <option value="">На модерации</option>
                    <option value="">Найдено</option>
                    <option value="">В поиске</option>
                </select>
                <ul>
                    <li>
                        <img src="img/img.jpg" alt="" class="img">
                        <small>23.11.2024 | Залупинский р-он</small>
                        <p>Бедный бедный негр паркер</p>                    
                    </li>
                    <li>
                        <img src="img/img.jpg" alt="" class="img">
                        <small>23.11.2024 | Залупинский р-он</small>
                        <p>Бедный бедный негр паркер</p>                    
                    </li>
                    <li>
                        <img src="img/img.jpg" alt="" class="img">
                        <small>23.11.2024 | Залупинский р-он</small>
                        <p>Бедный бедный негр паркер</p>                    
                    </li>
                </ul>
            </div>
        </section>

    </main>
</body>
</html>