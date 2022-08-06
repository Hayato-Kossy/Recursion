<?php

function decimalToHexadecimal(int $decNumber): string{
    $hexadecimal = "0123456789ABCDEF";
    $ans = "";

    while ($decNumber > 0){
        $ans = (string)$hexadecimal[$decNumber % 16] . $ans;
        $decNumber = floor($decNumber / 16);
    }

    return $ans;
}