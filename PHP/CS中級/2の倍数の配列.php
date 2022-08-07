<?php

function evenRange(int $a, int $b): array{
    $ans = [];

    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 == 0) {
            array_push($ans, $i);
        }
    }

    return $ans;
}