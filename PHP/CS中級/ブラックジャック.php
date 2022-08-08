<?php

function winnerBlackjack(array $playerCards, array $houseCards): bool{
    if (is_Over_21(get_cardValue($playerCards))) return false;
    if (is_Over_21(get_cardValue($playerCards)) && is_Over_21(get_cardValue($houseCards)))return false;
    if (!is_Over_21(get_cardValue($playerCards)) && is_Over_21(get_cardValue($houseCards))) return true;

    return get_cardValue($playerCards) > get_cardValue($houseCards);
}

function get_cardValue(array $cards): int{
    $values = ["A","2","3","4","5","6","7","8","9","10","J","Q","K"];

    $length = count($values);
    $ans = 0;

    foreach($cards as $card) {
        for ($i = 0; $i < $length; $i++) {
            if ($values[$i] == substr($card, 3)) $ans += $i + 1;
        }
    }
    echo $ans.PHP_EOL;
    return $ans;
}   

function is_Over_21(int $sum): bool{
    return $sum > 21 ? true : false;
}