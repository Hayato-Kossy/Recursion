<?php

function multipleOfTwoTotal(int $n): int{
    if ($n <= 0) return 0;

    return multipleOfTwo($n) + multipleOfTwoTotal($n - 1);
}

function multipleOfTwo(int $n): int{
    if ($n <= 0) return 0;

    return ($n * 2) + multipleOfTwo($n - 1);
}