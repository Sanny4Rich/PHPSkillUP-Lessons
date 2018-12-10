<?php
/**
 * array_splice(массив, откуда отрезать, [сколько], [вставить взамен]) - делает то же что array_slice , но отрезает от основного массива и можно выбрать замену
 */

    $arr = range(a,z,1);
    $zamena = ['z','y','z',1];

    $arrslice = array_splice( $arr, 12, 4, $zamena);

    echo ' Новый массив '.'<br>';
    foreach ($arrslice as $key => $value){
        echo $key.'=>'.$value.'<br>';
    }

    echo 'Старый массив'.'<br>';
    foreach ($arr as $key => $value){
    echo $key.'=>'.$value.'<br>';
    }