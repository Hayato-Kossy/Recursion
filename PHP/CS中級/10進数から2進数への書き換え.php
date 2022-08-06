<?php

function decimalToBinary(int $decNumber): string{
    $ans = "";

    while ($decNumber > 0) {
        $ans = (string)$decNumber % 2 . $ans;
        $decNumber = floor($decNumber / 2);
    }

    return $ans;
}