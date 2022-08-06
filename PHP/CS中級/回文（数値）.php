<?php

function isPalindromeInteger(int $n): bool{
    $str_number = (string)$n;
    $right = strlen($str_number) - 1;
    $mid = floor($right / 2);

    for ($i = 0; $i <= $mid; $i++) {
        if ($str_number[$i] != $str_number[$right - $i]) return false;
    }

    return true;
}