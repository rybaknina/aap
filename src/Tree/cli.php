<?php
require_once '../../vendor/autoload.php';

use Nin\Tree\BinaryHeap;

$heap = new BinaryHeap();
$heap->insert(19);
$heap->insert(36);
$heap->insert(54);
$heap->insert(100);
$heap->insert(17);
$heap->insert(3);
$heap->insert(25);
$heap->insert(67);
$heap->insert(2);
$heap->insert(7);
while (!$heap->isEmpty()) {
    echo $heap->extract() . "\n";
}