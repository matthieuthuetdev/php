<?php
function getMC2(): string
{
    return "Einstein";
}
function getUserName(string $firstName, string $name): string
{
    return $firstName . $name;
}
function getFullName(string $name, string $firstName): string
{
    return strtolower($firstName) . " " . strtoupper($name);
}
function askUser(string $name, string $firstName):string
{
    return "Bonjour " . getFullName($name, $firstName) . " connaisez vous " . getMC2() . " ?";
}


echo getMC2() . PHP_EOL . getUserName("matthieuu", "THUET") . PHP_EOL . getFullName("THUET", "Matthieu") . PHP_EOL . askUser("thuet", "matthieu");
