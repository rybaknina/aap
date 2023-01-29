<?php

use Nin\Tree\RBTree\Parser;
use Nin\Tree\RBTree\Tree;

require_once '../../../vendor/autoload.php';

$parser = new Parser();
$tree = new Tree();

$str = "(x+2)^2+7*y-z";
$arr = $parser->run($str);
$tree->buildTree($arr);

//print_r($tree);

echo $str . PHP_EOL;
echo 'x=2, y=1, z-22. Equals: ' . $tree->runCalculation(2, 1, 22) . PHP_EOL; //1
echo 'x=2, y=1, z-20. Equals: '. $tree->runCalculation(2, 1, 20) . PHP_EOL; //3


$parser2 = new Parser();
$tree2 = new Tree();

$str2 = "-x*2+4/(4-2)^2+3";
$arr2 = $parser2->run($str2);

$tree2->buildTree($arr2);
//print_r($tree2);

echo $str2 . PHP_EOL;
echo 'x=2. Equals: ' . $tree2->runCalculation(2) . PHP_EOL; //0
echo 'x=3. Equals: ' . $tree2->runCalculation(3) . PHP_EOL; //-2
