<?php


require_once "data/Product.php";

$product = new Product("aria agus riadi", 10000);

//$product->name = 'aria agus riadi'; // error
//$product->price = 1000; // error

$product->getName();
$product->getPrice();


$dummy = new ProductDummy('dummy', 1000);
$dummy->info();