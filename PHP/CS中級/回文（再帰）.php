<?php

function recursiveIsPalindrome(string $s): bool{
    $new_s = strtolower(str_replace(' ', '', $s));
    $times = floor(strlen($new_s) / 2);
    $left = 0;
    $right = strlen($new_s);

    return recursiveIsPalindromeHelper($new_s, $times, $left, $right - 1);
}

function recursiveIsPalindromeHelper(string $s, int $times, int $left, int $right): bool{
    if ($left >= $times) return true;
    if ($s[$left] != $s[$right]) return false;

    return recursiveIsPalindromeHelper($s, $times, $left + 1, $right - 1); 
}