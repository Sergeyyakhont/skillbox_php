<?php

$money = 100000;
$balance = $money;
$percent = 0.08;
for ($year = 1; $balance < $money * 2; $year++) {
    $balance = $balance + ($percent * $balance);
    if ($year % 3 == 0) {
        $percent += 0.02;
    }
}
echo "После $year лет, итого составляет $balance Ставка  $percent ";

