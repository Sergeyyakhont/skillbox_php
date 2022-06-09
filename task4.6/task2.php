<?php

$str = "Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море.";

$word = "море";
$word1= strrev($word);

$str1 = str_replace($word, $word1, $str);
var_dump($str1);
