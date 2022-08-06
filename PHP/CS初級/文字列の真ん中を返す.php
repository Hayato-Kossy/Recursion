<?php

function middleSubstring(string $stringInput): string{
    $middle = floor(strlen($stringInput) / 2); 

    $length = strlen($stringInput);

    return $length > 2 ? substr($stringInput, ceil($middle / 2), $middle) : $stringInput[0];
}