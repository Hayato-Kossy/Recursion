<?php

function divideBy3Count(int $n): int{
    return divideBy3CountHelper($n, 0);
}

function divideBy3CountHelper(int $n, $count): int{
    if ($n % 3 != 0) return $count;

    return divideBy3CountHelper($n / 3, $count + 1);
}