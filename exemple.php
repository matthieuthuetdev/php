<?php
function doubler(int $number):int{
    $number = $number * 2;
}
function optenirLeDoubleDunNombreAleatoir():int{
    $number = doubler(mt_rand(1,10))
}