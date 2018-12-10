<?php
/**
 * array_slice(массив, откуда отрезать, [сколько], [сохранять ключи = false]) - отрезает массив и возвращает часть массива
 */

    $arr = range(a,z,1);

    $arrslice = array_slice( $arr, 12, 4, true);

    foreach ($arrslice as $key => $value){
        echo $key.'=>'.$value.'<br>';
    }