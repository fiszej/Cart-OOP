<?php

include 'bootstrap.php';


$product = new Product(1, 'Car', 56999, 1);
$product2 = new Product(2, 'Phone', 599, 3);
$product3 = new Product(3, 'Laptop', 200, 1);
$product4 = new Product(4, 'Bike', 102, 2);

$product5 = new Product(5, 'Machine Bobcat', 23233, 34);


$cart = new Cart();

$cart->addItem($product, $product->getId());
$cart->addItem($product2, $product2->getId());
$cart->addItem($product3, $product3->getId());
$cart->addItem($product4, $product4->getId());
$cart->addItem($product5, $product5->getId());

echo $cart;


