<?php

function countDivisibleByK(int $n, int $k): int{
    return countDivisibleByKHelper($n, $k, 0);
}

function countDivisibleByKHelper(int $n, int $k, int $ans): int{
    if ($n % $k != 0) return $ans;

    return countDivisibleByKHelper($n / $k, $k, $ans + 1);
}