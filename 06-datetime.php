<?php
function getToday(): string
{
    $date = new DateTime();
    $today = $date->format("d/m/y");
    echo $today;
    return $today;
}

getToday();
