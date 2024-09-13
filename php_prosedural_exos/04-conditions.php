<?php
function isMajor(int $age): bool
{
    return $age >= 18;
}

function getRetired(int $age): string
{
    if ($age < 0) {
        return "Vous n'êtes pas encore né";
    } elseif ($age >= 0 && $age < 60) {
        return "il vous reste " . 60 - $age . " ans avant la retraite";
    } elseif ($age == 60) {
        return "vous êtes a la retraite cette année";
    } else {
        return "vous êtes a la retraites depuis " . $age - 60 . " ans";
    }
}

function getMax(float $firstNumber, float $secondNumber, float $seirdNumber): float
{
    if ($firstNumber == $secondNumber || $secondNumber == $seirdNumber || $firstNumber == $seirdNumber) {
        $nMax =0;
    } elseif ($firstNumber > $secondNumber && $firstNumber > $seirdNumber) {
        $nMax = $firstNumber;
    } elseif ($secondNumber > $firstNumber && $secondNumber > $seirdNumber) {
        $nMax = $secondNumber;
    } else {
        $nMax = $seirdNumber;
    }
    return round($nMax,2);
}

function testGetMax($n)
{
    for ($i = 0; $i < $n; $i++) {
        $firstNumber = mt_rand(0, 10);
        $secondNumber = mt_rand(0, 10);
        $seirdNumber = mt_rand(0, 10);
        echo "essaye " . $i . " valeure aléatoire : " . $firstNumber . "," . $secondNumber . "," . $seirdNumber . " et le résulta de la fonction est : " . getMax($firstNumber, $secondNumber, $seirdNumber) . PHP_EOL;
    }
}
function capitalCity(string $country):string
{
    switch ($country) {
        case "France":
            return "Paris";
            break;
        case "Allemagne":
            return "Berlin";
            break;
        case "Italie":
            return "Rome";
            break;
        case "Maroc":
            return "Rabat";
            break;
        case "Espagne":
            return "Madrid";
            break;
        case "Portugal":
            return "Lisbonne";
            break;
        case "Angleterre":
            return "Londres";
            break;
    }
    return "Capitale inconnue";
}
// var_dump(isMajor(19))  . PHP_EOL;
// echo getRetired(mt_rand(0, 100)) . PHP_EOL;
// testGetMax(100);
echo capitalCity("maroc");