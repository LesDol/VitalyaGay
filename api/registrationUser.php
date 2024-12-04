<?php
session_start();
include_once './bd.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Получение данных из формы
    $formData = $_POST;
    //Поля, которые ожидаем от forData
    $fields = [
        'email',
        'name', 
        'surname', 
        'phone', 
        'password', 
        'password-confirm',
        'agree'
    ];

    $errors = [];
    foreach($formData as $key => $value){
        $formData[$key] = htmlspecialchars($value);
    }
    
    //Проверка + очистка данных
    // Проверка на пустоту
    foreach($fields as $idx => $field){
        if(array_key_exists($field,$formData)){
            if($formData[$field]){
                continue;
            }
        
        }
        $errors[$field][] = 'Zapolni Gnida';
      }
      if($formData['password'] !== $formData['password-confirm']){
        $errors['password-confirm'][] = 'Paroly ne sovpadayut';
      }
    // Проверка правильнсти вводы пароля
    // Проверка уникальности
    $phone = $formData['phone'];
    $user = $bd->query(
        "SELECT id FROM users WHERE phone = '$phone'"
    )->fetchAll();
    if(!empty($user)){
     
    }
    if(empty($errors)){
        $request = $bd->
        prepare("
        INSERT INTO `users`( 
        `name`, 
        `surname`,
        `email`,
        `phone`,
        `passwords`,
        `agree`) 
        VALUES (?,?,?,?,?,?) 
        "
        )->execute([
            $formData['name'],
            $formData['surname'],
            $formData['email'],
            $formData['phone'],
            password_hash($formData['password'],PASSWORD_BCRYPT) ,
            $formData['agree'] ? 1 : 0,
        ]);
        header('Location: ../login.php');
    }
    if(!empty($errors)){
        $_SESSION['register-errors'] = $errors;
        header('Location: ../register.php');
    };
    

      
    // Валидация данных
    echo json_encode($errors);
} else {
    echo 'Запрос неверный';
}?>