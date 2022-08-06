<?php

class Product{
    public $title;
    public $price;

    function __construct(string $title, float $price) {
        $this->title = $title;
        $this->price = $price;
    } 
}

$product1 = new Product ("shampoo", 10);
echo $product1->title . PHP_EOL;
echo $product1->price . PHP_EOL;


$product2 = new Product ("conditioner", 5);
echo $product2->title . PHP_EOL;
echo $product2->price . PHP_EOL;