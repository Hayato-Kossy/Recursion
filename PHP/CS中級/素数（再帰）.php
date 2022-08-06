<?php

function recursiveIsPrime(int $n): bool{
    if ($n == 1) return false;
    else if ($n == 2) return true;

    return recursiveIsPrimeHelper($n, 2);
}

function recursiveIsPrimeHelper(int $n, int $count): bool{
    if ($n - 1 < $count) return true;
    else if ($n % $count == 0) return false;

    return recursiveIsPrimeHelper($n, $count + 1);
}