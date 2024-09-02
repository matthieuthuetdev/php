<?php
require "./function.php";
function getToday():string
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
    if ($interval->invert == 1 && $interval->days == 0){
        return "Aujourd'hui";
    }elseif($interval->invert == 1 && $interval->days != 0){
        return "Évènement passé";
    }else{
        
    }
}



getToday();
var_dump(getTimeLeft("02-10-2024"));
