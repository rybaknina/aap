<?php
// поиск элемента массива с известным индексом
$array = [5, 10, 44, 29];

echo 'find element by index: ' . $array[0] . ' - O(1)' . PHP_EOL;

// дублирование массива через foreach
$copy = [];
foreach ($array as $value) { // O(N)
    $copy[] = $value;
}
echo 'duplicate throw foreach: ' . implode(',', $copy) . ' - O(N)' . PHP_EOL;

// рекурсивная функция нахождения факториала числа
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$n = 5;
echo 'factorial of $n : ' . factorial($n) . ' - O(N)';