<?php

function calculateCorporationTax(string $state, int $year, int $profit): int{
    // 関数を完成させてください
    $federalTax = 0.21;
    return isLeapYear($year) ? ceil($profit * stateTax($state)) : ceil($profit * $federalTax + $profit * stateTax($state));
}

function stateTax(string $state): float {
    switch($state) {
        case "AZ":
            return 0.049;
        case "CA":
            return 0.0884;
        case "TX":
            return 0;
        case "NC":
            return 0.025;
        default:
            return 0.05;
    }
}

function isLeapYear(int $year): bool {
    return $year % 400 == 0 && $year % 100 != 0 || $year % 4 == 0;
}