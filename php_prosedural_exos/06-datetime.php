<?php

use LDAP\Result;

require "./function.php";
function getToday(): string
{
    $date = new DateTime();
    $today = $date->format("d/m/y");
    echo $today;
    return $today;
}
function getTimeLeft(string $eventDate)
{
    $date = new DateTime($eventDate);
    $today = new DateTime();
    $interval = $today->diff($date);
    if ($interval->invert == 1 && $interval->days == 0) {
        return "Aujourd'hui";
    } elseif ($interval->invert == 1 && $interval->days != 0) {
        return "Évènement passé";
    } else {
        $result = "Dans ";
        if ($interval->y != 0) {
            $result .= $interval->y == 1 ? $interval->y . " an " : $interval->y . " ans ";
        }
        if ($interval->m > 0) {
            $result .= $interval->d == 0 && $interval->y >= 0 ? "et " . $interval->y . "mois " : $interval->m . " mois ";
        }
        if ($interval->d > 0) {
            $result .= $interval->y > 0 || $interval->m > 0 ? "et " : "";
            $result .= $interval->d > 1 ? $interval->d . " jours " : $interval->d . " jour ";
        }
        return $interval;
    }
}



getToday();
var_dump(getTimeLeft("03-09-2024"));
