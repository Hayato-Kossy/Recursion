<?php

function doYouFail(string $string): string{
    $length = strlen($string);
    $index = 0;
    $absence = 0;

    while ($index < $length) {
        if ($string[$index] == "A") $absence += 1;
        $index++;
    }

    return $absence >= 3 ? "fail" : "pass";
}