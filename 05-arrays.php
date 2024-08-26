<?php
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$low = [];

function firstItem(array $table): string
{
    if (empty($table)) {
        return null;
    } else {
        return $table[0];
    }
}

function lastItem(array $table): string
{
    if (empty($table)) {
        return null;
    } else {
        return $table[count($table) - 1];
    }
}

echo firstItem($names) . PHP_EOL . lastItem($names);
