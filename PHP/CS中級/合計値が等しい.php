<?php

function canMakeTargetVal(array $arr, int $target): bool{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i == $j) continue;
            if ($arr[$i] + $arr[$j] == $target) return true;
        }
    }

    return false;
}