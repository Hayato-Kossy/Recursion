<?php

function hasPenalty(array $records): bool{
    $count = count($records);
    $index = 1;
    $prev_record = $records[0];

    while ($count > 1) {
        if ($records[$index] >= $prev_record) $prev_record = $records[$index];
        else return true;
        $index++;
        $count--;
    }

    return false;
}