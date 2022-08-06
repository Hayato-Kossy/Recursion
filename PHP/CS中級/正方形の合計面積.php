<?php

function totalSquareArea(int $x): int{
    if ($x <= 1) return 1;

    return totalSquareArea($x - 1) + $x ** 2 * $x;
}