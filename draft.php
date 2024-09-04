<?php
$date1 = new DateTime();
$date2 = new DateTime("07/11/2031");
$interval = $date1->diff($date2);
echo "aujourd'huit j'ai". $interval->y."ans ". $interval->m . "mois";