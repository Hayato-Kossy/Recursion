<?php

class Animal {
    public $name;
    public $weightKg;
    public $heightM;
    public $isPredator;
    public $speedKph;
    public $activityMultiplier;

    function __construct(string $name, float $weightKg, float $heightM, bool $isPredator, float $speedKph) {
        $this->name = $name;
        $this->weightKg = $weightKg;
        $this->heightM = $heightM;
        $this->isPredator = $isPredator;
        $this->speedKph = $speedKph;
        $this->activityMultiplier = 1.2;
    }

    function getBmi(): float{
        return round($this->weightKg / pow($this->heightM, 2), 2);
    }

    function getDailyCalories() :float{
        return round(70 * pow($this->weightKg, 0.75) * $this->activityMultiplier, 2);
    }

    function isDangerous(): bool{
        return ($this->isPredator || $this->heightM >= 170 || $this->speedKph >= 35) ? true : false;
    }
}

$rabbit = new Animal("rabbit", 10, 0.3, false, 20);
echo $rabbit->getBmi() .PHP_EOL;
echo $rabbit->isDangerous() .PHP_EOL;

$snake = new Animal("snake", 30, 1, true, 30);
echo $snake->isDangerous() .PHP_EOL;
echo $snake->getDailyCalories() .PHP_EOL;


$elephant = new Animal("elephant", 300, 3, false, 5);
echo $elephant->getBmi() .PHP_EOL;
echo $elephant->getDailyCalories() .PHP_EOL;


$gazelle = new Animal("gazelle", 50, 1.5, false, 100);
echo $gazelle->getDailyCalories() .PHP_EOL;
echo $gazelle->isDangerous() .PHP_EOL;