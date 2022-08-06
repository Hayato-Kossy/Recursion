<?php

function notDivided(int $x, int $y): string{
    return substr(notDividedHelper($x, $y, ""), 0 ,strlen(notDividedHelper($x, $y, "")) - 1);
}

function notDividedHelper(int $x, int $y, string $ans): string{
    if ($x <= 0) return $ans;
    if ($x % $y != 0) $ans = (string)$x . '-' . $ans;
    return notDividedHelper($x - 1, $y, $ans);
}