<?php

include 'bootstrap.php';


$product = new Product('Car', 56999, 1);
$product2 = new Product('Phone', 599, 3);

$cart = new Cart($product);
$cart->addItem($product2);

var_dump($cart);

