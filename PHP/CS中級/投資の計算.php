<?php

function howLongToReachFundGoal(int $capitalMoney, int $goalMoney, int $interest): int{
    return howLongToReachFundGoalHelper($capitalMoney, $goalMoney, $interest, 0);
}

function howLongToReachFundGoalHelper(int $capitalMoney, int $goalMoney, int $interest, int $year): int{
    if ($capitalMoney >= $goalMoney || $year >= 80) return $year;

    if ($year % 2 == 0) {
        $goalMoney *= 1.02;
    } else {
        $goalMoney *= 1.03;
    }

    return howLongToReachFundGoalHelper($capitalMoney * (1 + $interest / 100), $goalMoney, $interest, $year + 1);
}