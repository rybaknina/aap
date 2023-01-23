<?php

//Сколько произойдет итераций

/*
 * за основу взята рекомендация
 * простые программы можно анализировать с помощью подсчёта в них количества вложенных циклов.
 * Одиночный цикл в n итераций даёт f( n ) = n. Цикл внутри цикла — f( n ) = n2.
 * Цикл внутри цикла внутри цикла — f( n ) = n3. И так далее.
 * */

$n = 100;
$array[] = [];
for ($i = 0; $i < $n; $i++) { // O(N)
    for ($j = 1; $j < $n; $j *= 2) { // O(N)
        $array[$i][$j] = true;
    }
}
echo print_2($array) . ' O(N * N) = O(n^2)' . PHP_EOL;

for ($i = 0; $i < $n; $i += 2) { // O(N)
    for ($j = $i; $j < $n; $j++) { // O(N)
        $array[$i][$j] = true;
    }
}

echo print_2($array) . ' O(N * N) = O(n^2)' . PHP_EOL;

function print_2($array)
{
    foreach ($array as $item) {
        echo implode(',', $item);
    }
}