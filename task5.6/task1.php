<?php

$word = "credityza";
$d = 5;

$min = ord("a"); //97
$max = ord("z"); //122

for ($i = 0; $i < strlen($word); $i++) {
    $num = ord($word[$i]) + $d;
    if ($num - $max > 0) {
        $num = $min + ($num - $max - 1);
    }
    $word_cod = chr($num);
    echo($word_cod);
}
echo "\n";

$word_new = "hwjinydef";
for ($i = 0; $i < strlen($word_new); $i++) {
    $num = ord($word_new[$i]) - $d; //94
    if ($min - $num > 0) {
        $num = $max - ($min - $num - 1);
    }
    $word_first = chr($num);
    echo($word_first);
}