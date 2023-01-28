<?php

function generateArray($num): array
{
    $arr = [];
    for ($i = 0; $i < $num; $i++) {
        $arr[] = rand(1, 255);
    }
    return $arr;
}
//echo implode(", ", getArrayOnMillion()) . PHP_EOL;
//echo (sizeof(getArrayOnMillion()) + 1) . PHP_EOL;