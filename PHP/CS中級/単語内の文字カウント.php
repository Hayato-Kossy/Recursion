<?php

function charInBagOfWordsCount(array $bagOfWords, string $keyCharacter){
    $hashmap = [];

    for ($i = 0; $i < count($bagOfWords); $i++) {
        $target = $bagOfWords[$i];
        for ($j = 0; $j < strlen($target); $j++) {
            if (is_null($hashmap[$target[$j]])) $hashmap[$target[$j]] = 1;
            else $hashmap[$target[$j]]++;
        }
    }

    return $hashmap[$keyCharacter] != null ? $hashmap[$keyCharacter] : 0;
}