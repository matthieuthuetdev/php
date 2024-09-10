<?php
function htmlList(string $title, array $table)
{
    if (empty($table)) {
        return "<h3>Liste des personnes</h3>" . PHP_EOL .
            "<p>Aucun résultat</p>";
    } else {
        $result = "<h3>" . $title . "</h3><ul>";
        foreach ($table as $line) {
            $result .= "<li>" . $line . "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$empty = [];
$title = "liste des personnes"
?>
<!DOCTYPE html>
<html lang="fr 4">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage d'une liste de personne</title>
</head>

<body>
    <h3><?php echo $title; ?></h3>
    <?php if(empty($names)): ?>
        <p>Aucun résultat</p>
        <?php else: ?>
    <ul>
        <?php foreach($names as $line): ?>
        <li><?php echo $line; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</body>

</html>