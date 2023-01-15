<?php

use Nin\AdapterPattern\CircleAdapter;
use Nin\AdapterPattern\CircleAreaLib;
use Nin\AdapterPattern\SquareAdapter;
use Nin\AdapterPattern\SquareAreaLib;

require_once '../../vendor/autoload.php';

$circumference = 5 * M_PI;
$circleAdapter = new CircleAdapter(new CircleAreaLib());
echo 'Circle square with circumference ' . $circumference . ' is ';
echo $circleAdapter->circleArea($circumference) . PHP_EOL;

$sideLength = 6;
$squareAdapter = new SquareAdapter(new SquareAreaLib());
echo 'Square area with side length ' . $sideLength . ' is ';
echo $squareAdapter->squareArea($sideLength);