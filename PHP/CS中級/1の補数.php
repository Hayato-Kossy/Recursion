<?php

function oneComplement(string $bits): string{
    $ans = "";
    for ($i = 0; $i < strlen($bits); $i++) {
        if ($bits[$i] == "0") $ans .= "1";
        else $ans .= "0";
    }

    return $ans;
}