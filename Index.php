<?php

require 'Functions.php';

var_dump($_POST);

$userAdded = false;

$values = [
    'name' => '',
    'email' => '',
    'password' => '',
    'checked' => 0
];


if(isset($_POST['name'])){
    $errors = [];

    checkEmpty('name', 'Введите имя');
    checkEmpty('email','Введите Email');

        if (empty($errors['email']) && strpos($values['email'], '@') === false){
        $errors['email'] = 'Email должен содержать @';
    }
    checkEmpty('password', 'Введите пароль');


    if(!empty($_POST['checked'])){
        $values['checked'] = 1;
    }
    if(!$errors) {
        saveUser($values);
        $userAdded = true;
    }
}


include 'Form.html.php';

