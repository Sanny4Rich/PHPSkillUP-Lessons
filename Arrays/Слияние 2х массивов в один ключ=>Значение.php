<?php
/**
 * Array_combine - сливает 2 массива с ключем и значениме
 */

    $arr_abc = range(a,z,1);
    $arr_123 = range(0, count($arr_abc)-1,1);

    echo '----combined-----'.'<br>'.'<br>';
    $combined = array_combine($arr_abc, $arr_123);
    foreach ($combined as $item=>$value){
        echo $item.'=>'.$value.'<br>';
    }