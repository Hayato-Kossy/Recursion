<?php

function sumOfAllPrimes(int $n): int{
    $ans = 0;
    for ($i = 2; $i <= $n; $i++){
        if (is_primes($i)) $ans += $i;
    }

    return $ans;
}
function is_primes(int $n): bool{
    for ($i = 2; $i < $n; $i++){
        if ($n % $i == 0) return false;
    }

    return true;
}