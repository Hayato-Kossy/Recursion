<?php

function getEmotion(int $height, string $planet): string{
    $gravity = get_gravity($planet);
    $velocity = get_velocity($height, $gravity);
    return get_emotion_level($velocity);
}

function get_gravity(string $planet): float{
    $planets = [
        "Earth" => 9.8,
        "Jupiter" => 24.79,
        "Mars" => 3.71,
        "Pluto" => 0.58,
        "Moon" => 1.62,
    ];

    return $planets[$planet] != null ? $planets[$planet] : 0;
}

function get_velocity(int $height, float $gravity): float{
    return sqrt(2 * $gravity * $height);
} 

function get_emotion_level(float $velocity): string{
    if ($velocity >= 80) return "terrified";
    else if ($velocity >= 60) return "frighten";
    else if ($velocity >= 40) return "scared";
    else return $velocity != 0 ? "afraid" : "no data";
}