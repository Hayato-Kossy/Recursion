<?php

function isMountain(array $height): bool{
    $top = is_Up_in_middle($height);
    $prev_record = $height[$top];
    $position = $top + 1;

    if ($top == 0 || $position >= count($height) || count($height) <= 2) return false;
    while ($position < count($height) + 1) {
        if ($height[$position] >= $prev_record) return false;
        else $prev_record = $height[$position];
        $position++;
    }
    return true;
}

function is_Up_in_middle(array $height): int{
    $prev_record = $height[0];
    $verge = count($height) - 1;
    $position = 1;

    while ($position < $verge) {
        if ($height[$position] <= $prev_record) return $position - 1;
        else $prev_record = $height[$position];
        $position++;
    }

    return $position - 1;
}