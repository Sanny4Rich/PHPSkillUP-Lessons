<?php

define('DATA_FILE_NAME', 'users.txt');

function checkEmpty($fieldName, $errorMassage) {
    global $values, $errors;

    if(empty($_POST[$fieldName])){
        $errors [$fieldName]  = $errorMassage ;
    }else {
        $values[$fieldName] = $_POST[$fieldName];
}
}

function saveUser($values) {
    $file = fopen(DATA_FILE_NAME, 'a');
    fputs($file, implode("\t", $values)."\n");
    fclose($file);
}
