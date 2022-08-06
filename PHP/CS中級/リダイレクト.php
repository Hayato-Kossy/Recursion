<?php

function redirectionUrl(string $language): string{
    $template = "www.example.org/";
    switch($language) {
        case "English":
            return $template . "en";
        case "Japanese":
            return $template . "ja";
        case "Spanish":
            return $template . "es";
        case "Russian":
            return $template . "ru";
        default:
            return $template;
    }
}