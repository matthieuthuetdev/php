<?php
$namesnames = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function firstItem(array $tab): ?string{
$premierElement = $tab[0];
return " Le premier element est : $premierElement.";
}
if (var_dump(firstItem($names))) {
var_dump(firstItem($names));
} else {
echo PHP_EOL;
echo firstItem($names);
echo PHP_EOL;

}