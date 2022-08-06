<?php

function isPerfectSquare(int $x, int $y): bool{
    return hasDecimal(sqrt(pow($x, 2) + pow($y, 2)));
}

function hasDecimal(float $z): bool{
    return fmod($z, 1) == 0;
}