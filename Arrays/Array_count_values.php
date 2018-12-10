<?php
/**
 * Array_count_values - делает подсчет одинаковых элементов массива, ключ - элемент первого массива, значение - кол-во элементов первого массива
 */

    $arr = ['a','a','a','a','b','c','c','d','d','d'];

    $arr_count_values= array_count_values($arr);

    foreach ($arr_count_values as $item=>$value){
        echo $item.'=>'.$value.'<br>';
    }