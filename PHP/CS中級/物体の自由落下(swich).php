<?php

function fallingDistance(string $planet, int $time): int{
    $height = planetGravityMpss($planet) * pow($time, 2) / 2;
    return floor(metersToMiles($height));
}

function planetGravityMpss(string $planet): float{
    switch($planet){
        case "Earth":
            return 9.8;
        case "Jupiter":
            return 24.79;
        case "Mercury":
            return 3.7;
        default:
            return 0;
    }
}

function metersToMiles(float $meter): float{
    return $meter * 0.000621371;
}