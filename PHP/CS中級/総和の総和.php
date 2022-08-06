<?php

function summation(int $n): int{
    if ($n <= 0) return 0;
    return $n + summation($n-1);
}
function summationOfSummation(int $n): int{
    if ($n <= 0) return 0;
    return summation($n) + summationOfSummation($n-1);    
}