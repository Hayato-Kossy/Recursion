<?php

function romanToInteger(string $romanNumber): int{
    $hashmap = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    $length = strlen($romanNumber);
    $ans = 0;

    for ($i = 0; $i < $length; $i++) {
        if ($i == $length - 1) $ans += $hashmap[$romanNumber[$i]];
        else if ($hashmap[$romanNumber[$i]] < $hashmap[$romanNumber[$i + 1]]) $ans -= $hashmap[$romanNumber[$i]];
        else $ans += $hashmap[$romanNumber[$i]];
        echo $ans.PHP_EOL;
    }

    return $ans;
}