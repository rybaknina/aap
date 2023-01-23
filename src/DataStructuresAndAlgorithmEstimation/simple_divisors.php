<?php

/*
* Простые делители числа 13195 — 5, 7, 13 и 29. Каков самый большой делитель числа
* 600851475143, являющийся простым числом?
*/

/**
 * @param int $num
 * @return int
 */
function getLargeDivisor(int $num): int
{
    $count = 1;
    while ($num != 1) {
        $count += 1;
        if ($num % $count == 0) {
            $num /= $count;
        }
    }
    return $count;
}

echo 'the largest divisor ' . getLargeDivisor(13195) . PHP_EOL;

echo 'the largest divisor ' . getLargeDivisor(600851475143) . PHP_EOL;
