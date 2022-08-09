<?php

function websitePagination(array $urls, int $pageSize, int $page): array{
    $index = $pageSize * ($page - 1);
    $ans = [];

    while ($pageSize > 0 && $index < count($urls)) {
        array_push($ans, $urls[$index]);
        $index++;
        $pageSize--;
    }

    return $ans;
}