<?php

class Dog {
    function __construct(string $name, int $size, int $age) {
        $this->name = $name;
        $this->size = $size;
        $this->age = $age;
    }

    function bark(): string{
        if ($this->size >= 50) return "Wooof! Woof!" . PHP_EOL;
        else if ($this->size >= 30) return "Ruff! Ruff!" . PHP_EOL;
        else return "Yip! Yip!" . PHP_EOL;
    }

    function calcHumanAge(): int{
        return 12 + ($this->age - 1) * 7;
    } 
} 

$goldenRetriever = new Dog("Golden Retriever", 60, 10);
echo $goldenRetriever->bark();
echo $goldenRetriever->calcHumanAge() . PHP_EOL;


$siberianHusky = new Dog("Siberian Husky", 55, 6);
echo $siberianHusky->bark();
echo $siberianHusky->calcHumanAge() . PHP_EOL;


$poodle = new Dog("poodle", 10, 1);
echo $poodle->bark();
echo $poodle->calcHumanAge() . PHP_EOL;


$shibaInu = new Dog("shibaInu", 35, 4);
echo $shibaInu->bark();
echo $shibaInu->calcHumanAge() . PHP_EOL;