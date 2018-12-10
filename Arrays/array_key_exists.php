<?php
/**
 * array_key_exists(key, $arr) - есть ли такой ключ в массиве?
 */

$arr = range(0, 100, 2);
foreach ($arr as $item => $value) {
    echo $item . ' =>' . $value . '<br>';
}

$rndm_key = rand(1, 100);
$result = array_key_exists($rndm_key, $arr);
echo $rndm_key . '<br>';
if ($result === true) {
    echo 'Ключ принадлежит массиву';
} else {
    echo 'Ключ не принадлежит массиву';
}