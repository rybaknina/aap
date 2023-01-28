<?php

require_once "generate_array.php";

// Сортировка пузырьком
function bubbleSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
}

// Шейкерная сортировка
function shakerSort($array)
{
    $n = count($array);
    $left = 0;
    $right = $n - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1],
                    $array[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1],
                    $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);
}

// Быстрая сортировка
function quickSort($arr)
{
    // count () возвращает количество элементов в массиве
    $count = count($arr);

    // Определяем, нужна ли сортировка (исключая не массив, а количество элементов массива меньше или равно 1)
    if ($count <= 1) return $arr;

    // Определяем промежуточное значение, которое является ссылочным значением
    $baseValue = $arr[0];
    /**
     * Определить два пустых массива для разделения исходного массива слева и справа
     * $ leftArr хранит массив меньше, чем эталонное значение, которое является левым разделом
     * $ rightArr хранит массив больше, чем эталонное значение, которое является правильным разделом
     */

    $leftArr = $rightArr = array();

    // Сравнить среднее значение массива, обратить внимание на значение $ i, начиная с 1 (или $ i = 0; $ i <$ count-1)
    for ($i = 1; $i < $count; $i++) {
        if ($baseValue > $arr[$i]) {
            // Меньше значения эталона помещается в левый раздел
            $leftArr[] = $arr[$i];
        } else {
            // Меньше, чем эталонное значение помещается в правильный раздел
            $rightArr[] = $arr[$i];
        }
    }

    // Рекурсивная сортировка подпоследовательностей элементов, меньших, чем контрольное значение, и подпоследовательностей элементов, превышающих контрольное значение
    $leftArr = quickSort($leftArr);
    $rightArr = quickSort($rightArr);

    // Возвращаем объединенный и отсортированный массив, помещаем значения эталона в массив и объединяем их вместе, обращаем внимание на порядок, левый раздел помещается впереди, значение эталона размещается посередине, а правый раздел помещается сзади
    return array_merge($leftArr, array($baseValue), $rightArr);
}

// Пирамидальная сортировка
function heapify($arr, $countArr, $i)
{
    $largest = $i; // Инициализируем наибольший элемент как корень
    $left = 2 * $i + 1; // левый = 2*i + 1
    $right = 2 * $i + 2; // правый = 2*i + 2
    // Если левый дочерний элемент больше корня
    if ($left < $countArr && $arr[$left] > $arr[$largest])
        $largest = $left;
    //Если правый дочерний элемент больше, чем самый большой элемент на данный момент
    if ($right < $countArr && $arr[$right] > $arr[$largest])
        $largest = $right;
    // Если самый большой элемент не корень
    if ($largest != $i) {
        $swap = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $swap;
        // Рекурсивно преобразуем в двоичную кучу затронутое поддерево
        heapify($arr, $countArr, $largest);
    }
}

//Основная функция, выполняющая пирамидальную сортировку
function heapSort($arr)
{
    $countArr = count($arr);
    // Построение кучи (перегруппируем массив)
    for ($i = $countArr / 2 - 1; $i >= 0; $i--)
        heapify($arr, $countArr, $i);
    //Один за другим извлекаем элементы из кучи
    for ($i = $countArr - 1; $i >= 0; $i--) {
        // Перемещаем текущий корень в конец
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;
        // вызываем процедуру heapify на уменьшенной куче
        heapify($arr, $i, 0);
    }
}

/* Вспомогательная функция для вывода на экран массива размера n */
function printArray($arr)
{
    $countArr = count($arr);
    for ($i = 0; $i < $countArr; ++$i)
        echo($arr[$i] . " ");
}

// Тестирование
$arr = generateArray(10000);

$start = microtime(true);
echo 'start bubbleSort ' . $start . PHP_EOL;
bubbleSort($arr);
echo "Speed of bubbleSort is " . (microtime(true) - $start) . PHP_EOL;

$start = microtime(true);
echo 'start shakerSort ' . $start . PHP_EOL;
shakerSort($arr);
echo "Speed of shakerSort is " . (microtime(true) - $start) . PHP_EOL;

$start = microtime(true);
echo 'start quickSort ' . $start . PHP_EOL;
quickSort($arr);
echo "Speed of quickSort is " . (microtime(true) - $start) . PHP_EOL;

$start = microtime(true);
echo 'start heapSort ' . $start . PHP_EOL;
heapSort($arr);
echo "Speed of heapSort is " . (microtime(true) - $start) . PHP_EOL;


