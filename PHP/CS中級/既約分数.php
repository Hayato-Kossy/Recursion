<?php

function irreducibleFraction(int $x, int $y): string{
    $GCD = GCD($x, $y);
    $ans = (string)$x / $GCD .'/'. (string)$y / $GCD;
    $index = strpos($ans, '/');
    return $y / $GCD == 1 ? substr($ans, 0, $index) : $ans;
}

function GCD(int $x, int $y): int{
    if ($x % $y == 0) return $y;

    return GCD($y, $x % $y);
}