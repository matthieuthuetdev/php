<?php
require "./model/Pret.php";
$mensualiteValue = "";
if (!empty($_GET["valider"]) && !empty($_GET["capitalEmprunter"]) && !empty($_GET["taux"]) && !empty($_GET["rembourcementNbAnnee"])) {
    $emprunt = new Pret($_GET["capitalEmprunter"], $_GET["taux"], $_GET["rembourcementNbAnnee"]);
    $mensualiteValue = $emprunt->calculMensualite();
    echo $mensualiteValue;
}
echo $mensualiteValue;
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prèt</title>
</head>

<body>
    <h1>Formulaire de calcule des mensualitée d'un emprunt :</h1>
    <div>
        <form action="" method="get" enctype="text/plain">
            <div>
                <label for="capitalEmprunter">Capital emprunté</label>
                <input type="number" id="capitalEmprunter" min="0" step="0.01" name="capitalEmprunter">
            </div>
            <div>
                <label for="taux">Taux en %</label>
                <input type="number" min="0" max="100" step="0.1" id="taux" name="taux">
            </div>
            <div>
                <label for="rembourcementNbAnnee">Durée du remboursement en nombre d'anéex</label>
                <input type="number" min="0" id="rembourcementNbAnnee">
            </div>
            <label for="mensualite">Mensualitée</label>
            <input type="text" value="<?php echo $mensualiteValue; ?>" disabled="true">
            <div>
                <input type="submit" name="valider" value="valider">
            </div>
        </form>
    </div>
</body>

</html>