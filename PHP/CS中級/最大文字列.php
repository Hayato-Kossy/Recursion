<?php

function maxAscilString(array $stringList): int{
    $count = count($stringList);
    $ans = 0;
    $max = 0;

    for ($i = 0; $i < $count; $i++){
        if ($max < get_Ord($stringList[$i])) {
            $max = get_Ord($stringList[$i]);
            $ans = $i;
        }
    }

    return $ans;
}

function get_Ord(string $word): int{
    $length = strlen($word);
    $ans = 0;

    for ($i = 0; $i < $length; $i++) {
        $ans += ord($word[$i]);
    }

    return $ans;
}