<?php
function stringLength(string $password): bool
{
    $passwordClean = str_replace(" ", "", $password);
    $passwordSize = strlen($passwordClean);
    if ($passwordSize >= 9) {
        return true;
    } else {
        return false;
    }
}

function passwordCheck(string $input): bool
{
    $password = str_replace(" ", "", $input);
    if (strlen($password) >= 9 && preg_match("[a-z]{1,}",$password) && preg_match("[A-Z]{1,}",$password) && preg_match("[1-9]{1,}",$password) && preg_match("[^a-zA-Z0-9]{1,}",$password)) {
        return true;
    }
    return false;
}
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
$input = readline();
var_dump(passwordCheck($input));
