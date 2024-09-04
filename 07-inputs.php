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



var_dump(stringLength("mmj"));