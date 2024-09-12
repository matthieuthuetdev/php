<?php
require "./model/Contribuable.php";
if(isset($_GET["prenom"])){
    $personne = new Contribuable($_GET["prenom"], $_GET["nom"], $_GET["revenu"]);

}

?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcule de l'impo sur le revenu</title>
</head>

<body>

        <form action="index.php" method="get" enctype="text/plain">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" require>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div>
                <label for="revenu">Revenue sur la derrnière année</label>
                <input type="number" name="revenu" id="revenu">
            </div>
            <div>
                <input type="submit">
            </div>

        </form>
        <p><?php echo isset($_GET["prenom"]) ? "votre impo sur le revenue est de :" . $personne->calculerImpot() . " €" : ""; ?></p>
</body>

</html>