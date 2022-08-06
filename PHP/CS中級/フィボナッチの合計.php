<?php
function fibonacciTotal(int $n): int{
    return $n != 0 ? fibonacciTotalHelper($n, 0, 1, 1) : 0;
}

function fibonacciTotalHelper(int $n, int $f1, int $f2, int $total): int{
    if ($n <= 1) return $total;

    return fibonacciTotalHelper($n - 1, $f2, $f1 + $f2, $total += $f1 + $f2);
}