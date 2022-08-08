<?php

function numberOfWay(int $x): int{
    if ($x <= 2) return $x;

    return numberOfWay($x - 1) + numberOfWay($x - 2);
}