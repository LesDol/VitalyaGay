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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/pages/add.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая жизнь | </title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">На главную</a>
        </div>
    </header>
    <main>
        <section class="add">
            <div class="container">
                <form method = "POST" action ="api/addPost.php">
                <select name="type" id="type">
                    <option value="cat">Кот</option>
                    <option value="dog">Собака</option>
                </select>
                <label for="desc">Дополнительная информация</label>
                <textarea name="desc" id="desc"></textarea>
                <label for="mark">Клеймо (если есть)</label>
                <input type="text" name="mark" id="mark">
                <select name="address" id="address">
                    <option value="228 STREET">Кировский</option>
                    <option value="STREET 228">Центр</option>
                </select>
                <label for="date">Дата</label>
                <input type="date" name="date" id="date">
                <button type="submit">Добавить</button> 
            </form>
            </div>
        </section>
    </main>
    
</body>
</html>