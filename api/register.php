<?php

include_once './bd.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $formdata = $_POST;
    
    $Fields = [
       'name',
       'surname',
       'email',
       'phone',
       'password',
       'agree'
    ];
    $errors = [];

    foreach($Fields as $lds => $Field){
        if(!$formData[$Field]){
            $errors[][$Field] = "Zapolni pole uebok";
        }

    }
  echo json_encode($formdata);
}else{
    echo 'Запрос неверный';
}

// echo $_SERVER['REQUEST_METHOD'];

?>