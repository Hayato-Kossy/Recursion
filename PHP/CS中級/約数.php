<?php

function divisor(int $number): string{
    return '1' . divisorHelper($number, 2, "");
}

function divisorHelper(int $number, int $count, string $ans): string{
    if ($count > $number) return $ans;

    if ($number % $count == 0) $ans .= '-' . (string)$count;
    return divisorHelper($number, $count + 1, $ans);
}