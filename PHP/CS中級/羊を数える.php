<?php

function sheeps(int $count): string{
    return sheepsHelper($count, "");
}

function sheepsHelper(int $count, string $ans): string{
    if ($count <= 0) return $ans;

    return sheepsHelper($count - 1, $ans = (string)$count . " sheep" . ' ~ ' . $ans);
}