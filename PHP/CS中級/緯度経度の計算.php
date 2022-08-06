<?php

function calculateLocation(float $latitude, float $longitude): string{
    return northOrSouth($latitude) . "/" . westOrEast($longitude);
}

function northOrSouth(float $latitude): string{
    if ($latitude == 0) return "equator";

    return $latitude > 0 ? "north" : "south";
}

function westOrEast(float $longitude): string{
    if ($longitude == 0) return "prime meridian";

    return $longitude > 0 ? "east" : "west";
}