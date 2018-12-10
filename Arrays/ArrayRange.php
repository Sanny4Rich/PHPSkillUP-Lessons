<?php
/**
    Заполняет массив элементами с
 *  range(первый элемент, последний, [шаг])
 */
    $arr = range(0,100, 12);
    foreach ($arr as $item => $value){
        echo $item.' =>'. $value.'<br>';
     }

    echo 'Заполняем символами'.'<br>';

    $arr = range('a','k', 2);
    foreach ($arr as $item => $value){
    echo $item.' =>'. $value.'<br>';
}