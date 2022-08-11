<?php

function maxOfPairSum(array $arr1, array $arr2, int $x): string{
    $max = PHP_INT_MIN;
    $curr = PHP_INT_MIN;
    for ($i = 0; $i < count($arr1); $i++) {
        for ($j = 0; $j < count($arr2); $j++) {
            $curr = $arr1[$i] + $arr2[$j];
            if ($curr < $x && $max < $curr) $max = $curr;
            if ($max == $x) break;
        }
    }

    return $max == PHP_INT_MIN ? "no pair" : (string)$max;
}