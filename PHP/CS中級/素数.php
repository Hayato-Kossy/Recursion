<?php

function isPrime(int $number): bool{
    $i = 2;
    while ($i < $number) {
        if ($number % $i == 0) return false;
        $i += 1;
    }

    return $number == 1 ? false : true;
}