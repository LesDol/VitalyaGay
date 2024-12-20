<?php session_start(); 
include_once './bd.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $formData = $_POST;
    $fields = [
        'email',
        'password',
    ];
    $errors = [];
    foreach ($formData as $key => $value){
        $formData[$key] = htmlspecialchars($value);
    }
    foreach($fields as $idx => $field){
        if(array_key_exists($field, $formData)){
            if($formData[$field]){
            continue;
        }
        
      }
        $errors[$field][] = 'Zapolni polya ishak';
    }
    $email = $formData['email'];
    $user = $bd->query("
        SELECT id From users WHERE email = '$email'
        "
    )->fetchAll();
    if (empty($user)){
        $errors['email'][] = 'user not found';
    }else{    

    $password = $formData['password'];
    $checkUser = $bd->query("
        SELECT id From users WHERE email = '$email' AND passwords = '$password'
        "
    )->fetchAll();
    if (empty($checkUser)){
        $errors['password'][] = 'Wrong password';
    }
}
    if (empty($errors)){
        $email = $formData['email'];
        $password = $formData['password'];
        $hash = time();
        $token = base64_encode("hash=$hash&email=$email&password=$password");
        
        $bd->query("
        UPDATE `users` SET api_token='$token'
        WHERE email = '$email' AND passwords = '$password' 
        "
    )->fetchAll();

    $_SESSION['token'] = $token;
    header("Location: ../profile.php");
    }

    if (!empty($errors)){
        $_SESSION['auth-errors'] = $errors;
        header('Location: ../login.php');
    }
} else {
    echo 'Запрос неверный';
}
?>