<?php

$arr = [
    'a' => 'Lemon',
    'b' => 'Pea',
    'c' => 'Apple',
    'd' => 'Pea',
    'e' => 'Orange',
];

$arr1 = count($arr);
var_dump($arr1);

$arr2 = array_flip($arr);
var_dump($arr2);

$arr3 = count($arr2);
var_dump($arr3);

$arr4 = $arr3 != $arr1;
var_dump($arr4);
