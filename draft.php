<?php
function floatRondom($_min,$_max,$_nbint){
    $n = mt_rand($_min,$_max-1);
    if($_nbint > 0){
        $n .= ".";
        for($i = 0; $i <= $_nbint; $i++ ){
            $n .= mt_rand(0,9);
        }
    }
    $n = floatval($n);
    return $n;
}
var_dump(floatRondom(10,15,5));