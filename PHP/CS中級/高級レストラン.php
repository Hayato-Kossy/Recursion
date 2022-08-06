<?php

function processPayment(string $creditCardType , int $cost): float{
    $tax = 1.1;

    if (!is_valid_card($creditCardType)) return -1;
   
    $all_cost = $tax * $cost + get_chips($cost);
    return is_enough_money($all_cost) ? -1 : $all_cost;
}

function is_valid_card(string $creditCardType): bool{
    $creditCards = [
        "Visa" => true,
        "MasterCard" => true,
    ];    
    return $creditCards[$creditCardType] ? $creditCards[$creditCardType] : false;
}

function get_chips(int $cost): float{
    if ($cost % 3 == 0) return $cost * 0.03;
    else if ($cost % 5 == 0) return $cost * 0.05;
    else if ($cost % 7 == 0) return $cost * 0.07;
    else return $cost * 0.1;
}
 
function is_enough_money(float $all_cost): bool{
    return $all_cost > 300 ? true : false;
}