<?php

class Card {
    public $suit;
    public $value;
    public $intValue;

    function __construct(string $suit, string $value, int $intValue) {
        $this->suit = $suit;
        $this->value = $value;
        $this->intValue = $intValue;
    }
}

function printCardArray($cards): void{
    for ($i = 0; $i < count($cards); $i++) {
        echo $cards[$i]->suit . $cards[$i]->value . "(" . $cards[$i]->intValue . ")" .PHP_EOL;
    }
}


$cards = [];
array_push($cards, new Card("♣", "A", "1"));
array_push($cards, new Card("♦", "K", "13"));
array_push($cards, new Card("♥", "Q", "12"));
array_push($cards, new Card("♠", "J", "11"));

printCardArray($cards);