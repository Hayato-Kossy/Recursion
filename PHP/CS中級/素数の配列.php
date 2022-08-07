<?php

function primeArray(int $n): array{
    $ans = [];

    for ($i = 2; $i <= $n; $i++) {
        $curr_number = $i - 1;
        $is_prime = true;
        while ($curr_number > 1) {
            if ($i % $curr_number == 0) {
                $is_prime = false;
                break;
            }
            $curr_number -= 1;
        }
        if ($is_prime) array_push($ans, $i);
    }

    return $ans; 
}