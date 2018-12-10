<?php
/**
 * array_search(что ищем, где ищем, [сравнивать по типу = false]) - возвращает ключ первого найденого элемента в массиве, при true - сравнивает по типу значений
 */

    $arr = range(a,z);

    echo '<br>'.array_search('k',$arr,true).'<br>';

    foreach ($arr as $item=>$value){
        echo $item.'=>'.$value.'<br>';
    }