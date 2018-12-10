<?php
/**
 Array_keys , Array_value - записывает ключи и значения в новый массив
 */

$arr = range(50, 100, 2);
foreach ($arr as $item => $value) {
    echo $item . ' =>' . $value . '<br>';
}
    echo '-------- keys -------'.'<br>';

    $key = array_keys($arr);
    $newvalues = array_values($arr);
    foreach ($key as $newkeys => $keys) {
        echo $newkeys . '=>' . $keys . '<br>';
}
    echo '------- values -------'.'<br>';
    foreach ( $newvalues as $newvalue => $oldvalue){
        echo $newvalue.'=>'.$oldvalue.'<br>';
    }