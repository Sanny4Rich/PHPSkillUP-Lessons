<?php
/**
 * Array_merge (массив1, массив2, ... массив Н) - обьеденяет массивы в новый массив с новыми ключами
 * Array_merge_recursive
 */

    $arr_1 = range(1, 20, 2);
    $arr_2 = range(1, 20, 3);
    $arr_3 = range( 1, 20, 5);

    echo 'Есть 3 массива'.'<br>';

    echo 'Первый массив'.'<br>';
    foreach ($arr_1 as $item => $value){
        echo $item.'=>'.$value.'<br>';
    }

    echo 'Второй массив'.'<br>';
    foreach ($arr_2 as $item => $value){
        echo $item.'=>'.$value.'<br>';
    }

    echo 'Третий массив'.'<br>';
    foreach ($arr_3 as $item => $value){
        echo $item.'=>'.$value.'<br>';
    }


    echo '---Array_merge-----'.'<br>';

    $arrmerge = array_merge($arr_1,$arr_2,$arr_3);
    foreach ($arrmerge as $item => $value){
        echo $item.'=>'.$value.'<br>';
    }

    echo '---- Array_Merge_Recursive----'.'<br>';

    $arrmergerec = array_merge_recursive($arr_1,$arr_2,$arr_2);
    foreach ($arrmergerec as $item=>$value){
        echo $item.'=>'.$value.'<br>';

    }
var_dump($arrmergerec);