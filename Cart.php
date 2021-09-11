<?php


class Cart 
{
    private array $items = [];

    public function __construct(Product $product)
    {
        $this->items[] = $product;
    }

    public function addItem(Product $product)
    {
        $this->items[] = $product;
    }
}