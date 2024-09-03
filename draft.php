<?php
function getTimeLeft(string $userDate): string
{
    $myUserDate = new datetime("$userDate");
    $test = $myUserDate->format("Y-m-d");
    echo $test;
    $date = new datetime("now");

    if ($myUserDate < $date) {
        return "Évènement passé";
    } elseif ($myUserDate === $date) {
        return "Aujourd'hui";
    } else {
        return "Évenement futur";
    }
}




echo getTimeLeft('2022-04-22');
echo PHP_EOL;
echo getTimeLeft('2024-09-03');
echo PHP_EOL;
echo getTimeLeft('2025-04-22');
