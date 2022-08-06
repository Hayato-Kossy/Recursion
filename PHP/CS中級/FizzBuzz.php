<?php

function fizzBuzz(int $n): string{
    $ans = "";

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 15 == 0) $ans .= '-' . "FizzBuzz";

        else if ($i % 5 == 0) $ans .= '-' . "Buzz";

        else if ($i % 3 == 0) $ans .= '-' . "Fizz";

        else $ans .= '-' . (string)$i;
    }

    return substr($ans, 1);
}