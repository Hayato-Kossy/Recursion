<?php

function maximumPeople(int $x, int $y): int{
    if ($x % $y == 0) return $y;

    return maximumPeople($y, $x % $y);
}