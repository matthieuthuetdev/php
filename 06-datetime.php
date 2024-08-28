<?php
function getToday(): string
{
    $date = new DateTime();
    $today = $date->format("d/m/y");
    echo $today;
    return $today;
}
function getTimeLeft(string $eventDate):string{
    $date = new DateTime($eventDate);
    $today = new DateTime();
    if($today < $date){
        $date - $today;
    }
    
}
getToday();
getTimeLeft("01-10-2005");
