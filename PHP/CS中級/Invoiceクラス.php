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

class Invoice{
    public $invoiceNumber;
    public $invoiceItemHead;

    function __construct(string $invoiceNumber, InvoiceItem $invoiceItemHead) {
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceItemHead = $invoiceItemHead;
    }

    function amountDue(bool $taxes): float{
        $ans = 0;
        $iterator = $this->invoiceItemHead;
        while ($iterator != null) {
            $ans += $iterator->getTotalPrice();
            $iterator = $iterator->next;
        }
        return $taxes ? $ans * 1.1 : $ans;
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
$invoice = new Invoice ("UC1234567890", $firstItem);

echo $invoice->amountDue(false) . PHP_EOL; // --> 145
echo $invoice->amountDue(true) . PHP_EOL; // --> 159.5