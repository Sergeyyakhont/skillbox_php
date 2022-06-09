<?php

function plus5(&$x)
{
    return $x + 5;
}

$a = 3;

$result = plus5($a);
echo $result;