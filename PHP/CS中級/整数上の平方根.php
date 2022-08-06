<?php

function intSquareRoot(int $n): int{
    return intSquareRootHelper($n, 1);
}

function intSquareRootHelper(int $n, int $count): int{
    if ($n < $count ** 2) return $count - 1;
    return intSquareRootHelper($n, $count + 1);
}