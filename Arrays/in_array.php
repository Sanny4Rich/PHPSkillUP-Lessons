<?php
/**
in_array[ элемент , $arr] - принадлежит ли элемент массиву?
 */

$arr = range(0,100, 2);
foreach ($arr as $item => $value){
    echo $item.' =>'. $value.'<br>';
}

    $rndm_elem = rand(0,100);
    $result = in_array($rndm_elem, $arr);
    echo $rndm_elem.'<br>';
    if($result != true){
        echo 'Элемент не принадлежит массиву';
    }
    else{
        echo 'Элемент принадлежит массиву';
    }