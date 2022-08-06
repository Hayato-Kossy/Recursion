<?php

function twosComplement(string $bits): string{
    $oneComplement = oneComplement($bits);
    $flag = false;

    for ($i = strlen($oneComplement) - 1; $i >= 0; $i--) {
        if ($oneComplement[$i] == "0") {
            $oneComplement[$i] = "1";
            $flag = false;
            break;
        } else {
            $oneComplement[$i] = "0";
            $flag = true;
        }
    }

    return $flag ? "1" . $oneComplement : $oneComplement;
}

function oneComplement(string $bits): string{
    $ans = "";
    for ($i = 0; $i < strlen($bits); $i++) {
        if ($bits[$i] == "0") $ans .= "1";
        else $ans .= "0";
    }

    return $ans;
}