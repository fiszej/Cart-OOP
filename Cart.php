<?php


class Cart 
{
    private array $items = [];

    public function addItem(Product $product, $id)
    {
        $this->items[$id] = $product;
    }

    public function removeItem(Product $product)
    {
        unset($this->items[$product->getId()]);
    }

    public function getTotalSum()
    {
        $sum = 0;

        foreach ($this->items as $item) {
            $sum += $item->getPrice() * $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalQuantity()
    {
        $quantity = 0;

        foreach($this->items as $item) {
            $quantity += $item->getQuantity();
        }
        return $quantity;
    }

    public function getSumWithDiscount($discount)
    {
        $sum = $this->getTotalSum() * $discount;
        return $this->getTotalSum() - $sum;
    }

    public function __toString()
    {   
        echo '<h3>Shopping cart</h3><br>';
        echo '<p> Product list</p><br>';
        foreach ($this->items as $product) {
            
            echo $product->name. ' - '. $product->price. ' x '.$product->getQuantity();
            echo '<hr>';
        }

        echo '<b>Total sum: </b>'.$this->getTotalSum();
    }

}