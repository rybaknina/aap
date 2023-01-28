<?php
/*
 * Выписав первые шесть простых чисел, получим 2, 3, 5, 7, 11 и 13.
 * Очевидно, что 6-е простое число — 13.
 * Какое число является 10001-м простым числом?
 * */

function isPrime($number): bool
{
    if ($number == 2)
        return true;
    if ($number % 2 == 0)
        return false;
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0)
            return false;
        $i += 2;
    }
    return true;
}

function getPrimes($position)
{
    $primes = [];
    for ($i = 3; $i <= PHP_INT_MAX; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
            if ((sizeof($primes) + 1) === $position) {
                echo $i . PHP_EOL;
                break;
            }
        }
    }
}

$start = microtime(true);
getPrimes(10001);
echo "Speed of search 10001 prime number is " . (microtime(true) - $start);
