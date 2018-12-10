<?php
/**
 *Array_flip -меняет ключи и значения местами
 */

$arr = range(a,z,1);
echo '----Before Array Flip----'.'<br>';

foreach ($arr as $key=>$value){
    echo $key.' => '.$value.'<br>';
}

$arr_flip = array_flip($arr);

echo '----After Array Flip----'.'<br>';
    foreach ($arr_flip as $key=>$value){
        echo $key.' => '.$value.'<br>';
    }