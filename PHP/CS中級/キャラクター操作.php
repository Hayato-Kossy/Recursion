<?php

function characterLocation(string $commands): array{
    $length = strlen($commands);
    $command = [0, 0];
    $deirections = [
        "N" => [0, 1],
        "E" => [1, 0],
        "W" => [-1, 0],
        "S" => [0, -1]
    ];

    for ($i = 0; $i < $length; $i++) {
        echo $deirections[$commands[$i]];
        if (!is_null($deirections[$commands[$i]])){
            $command[1] += $deirections[$commands[$i]][1];
            $command[0] += $deirections[$commands[$i]][0];
        }
    }

    return $command;
}