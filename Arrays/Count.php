<?php
/* count - кол во элементов в массиве
*/
$arr = range(0,100, 2);
foreach ($arr as $item => $value){
    echo $item.' =>'. $value.'<br>';
}
echo 'Элементов в массиве = '.count($arr);