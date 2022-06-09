<?php

$a = rand(0,1);

var_dump($a);

$b = $a == 0 ? null: rand(1,3);

var_dump($b);

switch ($b) {
    case null:
        echo "переменная  не определена";
        break;
    case 1:
        echo "переменная равна 1";
        break;
    default:
        echo "случайное число";
}

var_dump(isset($b));

$c = $b ?? rand(20,30);

var_dump($c);
