<?php
function varDisplay($var)
{
    if (is_array($var)) {
        foreach ($var as $index => $value) {
            echo $index . ' => ' . $value . PHP_EOL;
        }
    } else {
        echo $var;
    }
}
