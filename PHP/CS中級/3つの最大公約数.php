<?php

function threeGCD(int $x, int $y, int $z): int{
    $gcd = threeGCDHelper($x, $y);

    return threeGCDHelper($gcd, $z);
}

function threeGCDHelper(int $x, int $y): int{
    if ($x % $y == 0) return $y;

    return threeGCDHelper($y, $x % $y);
}