<?php

class Product{
    public $title;
    public $price;

    function __construct(string $title, float $price) {
        $this->title = $title;
        $this->price = $price;
    } 
}

class InvoiceItem{
    public $product;
    public $quantity;
    public $next = null;

    function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    function getTotalPrice(): float{
        return $this->product->price * $this->quantity;
    }
}


$product1 = new Product ("shampoo", 10);
$product2 = new Product ("conditioner", 5);
$product3 = new Product ("tooth brush", 3);

$firstItem = new InvoiceItem($product1, 7);
$secondItem = new InvoiceItem($product2, 9);
$thirdItem = new InvoiceItem($product3, 10);

$firstItem->next = $secondItem;
$secondItem->next = $thirdItem;

echo $firstItem->getTotalPrice() . PHP_EOL; // --> 70
echo $secondItem->getTotalPrice() . PHP_EOL; // --> 45

echo $firstItem->next->getTotalPrice() . PHP_EOL; // --> 45
echo $firstItem->next->next->getTotalPrice() . PHP_EOL; // --> 30
echo $firstItem->next->product->price . PHP_EOL; // --> 5
echo $firstItem->next->next->product->title . PHP_EOL; // --> tooth brush