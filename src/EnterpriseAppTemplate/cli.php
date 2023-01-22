<?php

use Nin\EnterpriseAppTemplate\Repository\Repository\IdentityMap;
use Nin\EnterpriseAppTemplate\Repository\Repository\OutOfBoundsException;
use Nin\EnterpriseAppTemplate\Repository\Repository\ProductRepository;

require_once '../../vendor/autoload.php';

$map = new IdentityMap();
$repository = new ProductRepository();
try {
    $products = $repository->fetchAll();
    echo sizeof($products) . PHP_EOL;
    foreach ($products as $product) {
        print_r($product);
    }
    $someProducts = $repository->search([1, 2, 10]);
    echo PHP_EOL . sizeof($someProducts) . PHP_EOL;
    foreach ($someProducts as $product) {
        print_r($product) . PHP_EOL;
    }
} catch (OutOfBoundsException $e) {
}