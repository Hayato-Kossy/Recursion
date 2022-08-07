<?php

function minAndMax(array $intArr): array{
    $ans = [];
    
    array_push($ans, array_sum($intArr) - max($intArr));
    array_push($ans, array_sum($intArr) - min($intArr));

    return $ans;
}