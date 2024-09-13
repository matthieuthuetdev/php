<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prèt</title>
</head>

<body>
    <h1>Formulaire de calcule des mensualitée d'un emprunt :</h1>
    <div>
        <form action="" method="post" enctype="text/plain">
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
            <input type="unumber" disabled>
            <div>
                <input type="submit" value="valider">
            </div>

        </form>
    </div>
</body>

</html>