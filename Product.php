<?php

class Product 
{
    public string $name;
    public float $price;
    public int $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


}