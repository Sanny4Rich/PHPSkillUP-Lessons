<?php
/**
 * Sort - сортирует по возрастанию элементов
 * asort - по возрастанию элементов с сохранением ключей
 * rsort - по убыванию
 * arsort - по убыванию элементов с сохранением ключе
 * ksort - по возрастанию ключей
 * krsort - по убыванию ключей
 * usort - по функции по элементам
 * uasort - по фунции по элементам с сохранением ключей
 * uksort - по функции по ключам
 * natsort - натуральная сортировка
 *
 */

    $arr = range(1,10,1);
    foreach( $arr as $key=>$value){
        echo $value.'<br>';
    }

    echo '----- Shuffle ----'.'<br>';
    shuffle($arr);
        foreach( $arr as $key=>$value){
            echo $value.'<br>';}