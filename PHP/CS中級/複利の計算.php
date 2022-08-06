<?php

function calculateGoalMoney(int $capital, int $year): int{
    return $capital * pow(1 + calculateInterestRate($capital), $year);
}

function calculateInterestRate(int $capital): float{
    return $capital % 2 == 0 ? 0.02 : 0.03;
}