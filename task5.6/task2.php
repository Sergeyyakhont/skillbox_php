<?php

$letters = ['A', 'B'];
$numbers = [];

foreach ($letters as $letters1) {
    for ($i = 0; $i < 999; $i++) {
        foreach ($letters as $letters2) {
            foreach ($letters as $letters3) {
                $number =  sprintf("%s%03d%s%s\n", $letters1, $i, $letters2, $letters3);
                $numbers [] = $number;
                echo $number;
            }
        }
    }
}

echo "\n";

foreach ($numbers as $key => &$number) {
    if ($number[1] == $number[2] and $number[2] == $number[3]) {
        continue;
    }
    unset($numbers[$key]);
}
var_dump($numbers);
