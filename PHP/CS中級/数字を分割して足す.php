<?php

function splitAndAdd(int $digits): int{
    return splitAndAddHelper($digits, strlen($digits), 0);
}

function splitAndAddHelper(int $digits, int $length, int $ans): int{
    if ($length <= 0) return $ans;

    return splitAndAddHelper($digits / 10, $length - 1, $ans + $digits % 10);
}