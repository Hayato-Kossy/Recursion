<?php

function addEveryOtherElement(array $intArr): int{
    $length = count($intArr);
    $ans = 0;

    for ($i = 0; $i < $length; $i++) {
        if (is_odd($i)) $ans += $intArr[$i];
    }

    return $ans;
}

function is_odd(int $number): bool{
    return $number % 2 == 0;
}