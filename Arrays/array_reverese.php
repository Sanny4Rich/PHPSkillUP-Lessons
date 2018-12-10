<?php
/**
 * Array_reverse - переворачивает массив в обратном порядке ,ключи пишутся с 0*/

    $arr = range(a,k ,1);

    echo 'Первоначальный массив :'.'<br>';
    foreach ($arr as $key=>$value){
        echo $key.'=>'.$value.'<br>';
    }
    $arr_reverse = array_reverse($arr);
    echo 'После reverse'.'<br>';
    foreach ($arr_reverse as $key=>$value){
        echo $key.'=>'.$value.'<br>';
    }