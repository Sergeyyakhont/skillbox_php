<?php

$words = ['A', 'B'];
$result = [];
foreach ($words as $word1) {
    foreach ($words as $word2) {
        for ($i = 0; $i < 999; $i++) {
            foreach ($words as $word3) {
                $result[] = $word1 . $word2 . str_pad($i, 3, '0', STR_PAD_LEFT) . $word3;
            }
        }
    }
}


echo json_encode($result);