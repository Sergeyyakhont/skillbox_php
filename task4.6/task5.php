<?php

$arr = [
    'a' => 'Lemon',
    'b' => 'Pea',
    'c' => 'Apple',
    'd' => 'Pea',
    'e' => 'Orange',
];

$arr1 = count($arr);
//var_dump($arr1);

$arr2 = array_flip($arr);
//var_dump($arr2);

$values4 = array_values($arr2);
//var_dump($values4);

$arr4 = ['f'];

$arr5 = array_merge($values4,$arr4);
var_dump($arr5);

$arr6 = array_values($arr);

$arr7 = array_combine($arr5,$arr6);
var_dump($arr7);
