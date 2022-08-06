<?php

function countSquare(int $x, int $y): int{
    return $x / GCD($x, $y) * $y / GCD($x, $y);
}

function GCD(int $x, int $y): int{
    if ($x % $y == 0) return $y;

    return GCD($y, $x % $y);
}