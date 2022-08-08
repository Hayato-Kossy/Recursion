<?php

function isMarcusLarger(string $stringOperand1, string $stringOperand2): bool{
    return count_Ascii($stringOperand1) > count_Ascii($stringOperand2);
}

function count_Ascii(string $stringOperand): int{
    $ascii = 0;

    for ($i = 0; $i < strlen($stringOperand); $i++){
        $ascii += ord(strtolower($stringOperand[$i]));
    }

    return $ascii;
}