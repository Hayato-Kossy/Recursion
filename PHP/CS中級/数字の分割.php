<?php

function recursiveDigitsAdded(int $digits): int{
    return $digits < 10 ? $digits : recursiveDigitsAddedHelper($digits, 0, 0);
}

function recursiveDigitsAddedHelper(int $digits, int $current,int $ans): int{
    if ($digits < 10) return $ans;

    while ($digits > 0) {
        $current += $digits % 10;
        $digits = floor($digits / 10);
        echo $current . PHP_EOL;
    }

    return recursiveDigitsAddedHelper($current, 0, $ans += $current);
}