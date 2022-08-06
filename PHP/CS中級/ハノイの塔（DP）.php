<?php

function towerOfHanoi(int $discs): int{
    $DP[0] = 1;

    for ($i = 1; $i < $discs; $i++) {
        $DP[$i] = $DP[$i - 1] * 2 + 1;
    }

    return $DP[$discs - 1];
}