<?php

function videosToWatch(array $time, int $dailyGoal): int{
    $limit = count($time);
    $accum = 0;
    $index = 0;

    while ($limit > 0) {
        $accum += $time[$index];
        if ($accum >= $dailyGoal) return count($time) - $limit + 1;
        $limit--;
        $index++;
    }

    return $accum < $dailyGoal ? -1 : count($time) - $limit;
}