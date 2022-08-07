<?php

function sortByMaxMin(array $arr): array{
    sort($arr);
    $ans = [];
    $mid = ceil(count($arr) / 2);

    for ($i = 0; $i < $mid; $i++) {
        array_push($ans, $arr[count($arr) - $i - 1]);
        array_push($ans, $arr[$i]);
    }
    if (count($arr) % 2 != 0) array_pop($ans);
    return $ans;
}