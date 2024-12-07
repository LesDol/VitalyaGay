<?php
session_start();
include_once './bd.php';

if($_SERVER['REQUEST_METHOD'] == 'GET' && 
array_key_exists('token',$_SESSION)){
    $token =$_SESSION['token'];
    $bd->query("
        UPDATE `users` SET api_token=NULL
        WHERE  api_token='$token'
        "
    )->fetchAll();
    unset($_SESSION['token']);
    header("Location: ../index.php");

}else{
    header("Location: ../index.php");
}

?>