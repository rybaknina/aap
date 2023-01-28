<?php

function deleteByValue($value): array
{
    $arr = [1, 2, 5, 8, 4, 9, 4, 2, 6, 4];
    echo "Before delete by value $value # " . implode(", ", $arr) . PHP_EOL;
    foreach ($arr as $key => $item) {
        if ($item == $value) {
            unset($arr[$key]);
        }
    }
    return $arr;
}

$value = 4;
echo "After delete by value $value # " . implode(", ", deleteByValue($value));