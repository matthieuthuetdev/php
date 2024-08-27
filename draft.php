<?php
$tab1 = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$tab2 = [];
$tab3 = ['1', '2', '3', '4'];

function firstItem(array $table): ?string
{
    if (empty($table)) {
        return null;
    } else {
        return $table[0];
    }
}



var_dump(firstItem($tab1));
//echo firstItem($tab1);
echo PHP_EOL . firstItem($tab2) . PHP_EOL . firstItem($tab3);
