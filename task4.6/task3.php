<?php

$arr = [
    'a' => 'Sea',
    'b' => 'Lake',
    'c' => 'Ocean',
    ];

$arr1 = array_keys($arr);
var_dump($arr1);

$arr2 = array_values($arr);
$arr3 = implode(' ' , $arr2);
echo $arr3;
