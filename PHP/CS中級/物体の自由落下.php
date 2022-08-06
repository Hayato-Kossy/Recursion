<?php

function fallingDistance(string $planet, int $time): int{
    $height = planetGravityMpss($planet) * pow($time, 2) / 2;
    return floor(metersToMiles($height));
}

function planetGravityMpss(string $planet): float{
    $planets = [
        "Earth" => 9.8,
        "Jupiter" => 24.79,
        "Mercury" => 3.7,
    ];
    return $planets[$planet] != null ? $planets[$planet] : 0;
}

function metersToMiles(float $meter): float{
    return $meter * 0.000621371;
}