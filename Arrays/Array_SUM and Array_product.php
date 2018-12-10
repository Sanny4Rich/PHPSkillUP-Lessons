<?php
/*
* array_sum - сумма элементов массива
 * array_product - произведение элементов массива
 */

$arr = range(1, 10, 1);
foreach ($arr as $item => $value) {
    echo $item . ' =>' . $value . '<br>';
}
    echo '------- SUM ----- by array_sum'.'<br>';
    $sum_arr_sum = array_sum($arr);
    echo 'Через array_sum'. $sum_arr_sum.'<br>';

    echo '------SUM ----- by foreach'.'<br>';

    $arr_sum_foreach = 0;
    foreach ($arr as $item =>$value){
        $arr_sum_foreach += $value;
    }
    echo 'Через форыч = '.$arr_sum_foreach.'<br>';


echo '------- Product ----- by array_product'.'<br>';
$prod_arr_prod = array_product($arr);
echo 'Через array_product'. $prod_arr_prod.'<br>';

echo '------Product ----- by foreach'.'<br>';

$arr_prod_foreach = 1;
foreach ($arr as $item =>$value){
    $arr_prod_foreach *= $value;
}
echo 'Через форыч = '.$arr_prod_foreach.'<br>';
