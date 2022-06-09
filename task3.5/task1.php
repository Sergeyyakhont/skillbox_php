<?php

$a = 9;
$b = 10*rand(1,3);

var_dump($a);
var_dump($b);

$c= $a*$b;

if ($c < 100) {
    echo "меньше 100";
}   elseif ($c < 200) {
    echo "меньше 200";
}   else {
    echo "Всё остальное";
}
