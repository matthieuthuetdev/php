<?php $names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$low = [];
$dev = ["steve", "alex", "matthieu", "habib"];
function firstItem(array $table): ?string
{
    if (empty($table)) {
        return null;
    } else {
        return $table[0];
    }
}
function lastItem(array $table): ?string
{
    if (empty($table)) {
        return null;
    } else {
        return $table[count($table) - 1];
    }
}
function sortItems(array $table)
{
    if (empty($table)) {
        return [];
    } else {
        arsort($table);
        return $table;
    }
}
function stringItems(array $table): ?string
{
    if (empty($table)) {
        return "Nothing to display";
    } else {
        asort($table);
        $result = implode(", ", $table);
        return $result;
    }
}
var_dump(firstItem($low));
echo PHP_EOL . lastItem($names) . PHP_EOL . stringItems($names);
