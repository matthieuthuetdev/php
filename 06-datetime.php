<?php
require "./function.php";
function getToday()
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
        $interval = $today->diff($date, false);
        return $interval;
    }







getToday();
varDisplay(getTimeLeft("01-8-2024"));
