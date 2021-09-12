<?php

include 'bootstrap.php';


$product = new Product(1, 'Car', 56999, 1);
$product2 = new Product(2, 'Phone', 599, 3);
$product3 = new Product(3, 'Laptop', 200, 1);
$product4 = new Product(4, 'Bike', 102, 2);

$product->setId(2);
$product2->setId(1);
$product3->setId(3);
$product4->setId(4);


$cart = new Cart();

$cart->addItem($product, $product->getId());
$cart->addItem($product2, $product2->getId());
$cart->addItem($product3, $product3->getId());
$cart->addItem($product4, $product4->getId());

echo $cart;


