<?php

require_once "generate_array.php";

function linearSearch(array $array, $value): int
{
    $step = 0;
    foreach ($array as $indexValue) {
        $step++;
        if ($indexValue === $value) {
            return $step;
        }
    }
    return -1;
}

function binarySearch($myArray, $num): int
{
    $step = 0;
    //определяем границы массива
    $left = 0;
    $right = count($myArray) - 1;
    while ($left <= $right) {
        $step++;
        //находим центральный элемент с округлением индекса в меньшую сторону
        $middle = floor(($right + $left) / 2);
        //если центральный элемент и есть искомый
        if ($myArray[$middle] == $num) {
            return $step;
        } elseif ($myArray[$middle] > $num) {
            //сдвигаем границы массива до диапазона от left до middle-1
            $right = $middle - 1;
        } elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
    }
    return $step;
}

function interpolationSearch($myArray, $num): int
{
    $start = 0;
    $step = 0;
    $last = count($myArray) - 1;
    while (($start <= $last) && ($num >= $myArray[$start])
        && ($num <= $myArray[$last])) {
        $step++;
        $pos = floor($start + (
                (($last - $start) / ($myArray[$last] - $myArray[$start]))
                * ($num - $myArray[$start])
            ));
        if ($myArray[$pos] == $num) {
            return $step;
        }
        if ($myArray[$pos] < $num) {
            $start = $pos + 1;
        } else {
            $last = $pos - 1;
        }
    }
    return $step;
}

$arr = generateArray(100);
$num = $arr[30];

echo implode(',', $arr) . PHP_EOL;

echo "Search $num" . PHP_EOL;
echo "Количество шагов linearSearch " . linearSearch($arr, $num) . PHP_EOL;
echo "Количество шагов binarySearch " . binarySearch($arr, $num) . PHP_EOL;
echo "Количество шагов interpolationSearch " . interpolationSearch($arr, $num) . PHP_EOL;
