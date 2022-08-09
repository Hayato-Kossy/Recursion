<?php

function rotateByTimes(array $ids, int $n): array{
    $index = 0;
    $max_index = count($ids);
    $ans = $ids;
    $n = floor($n % $max_index);

    for ($i = 0; $i < $max_index; $i++){
        if ($i + $n >= $max_index) {
            $ans[$i + $n - $max_index] = $ids[$i];
        }
        else $ans[$i + $n] = $ids[$i];
    }

    return $ans;
}