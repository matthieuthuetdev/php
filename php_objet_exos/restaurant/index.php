<?php
require "./model/Database.php";
require "./model/Liste_resto.php";
$db = new Database();

$dbConnection = $db->initDatabase();
$restoListe = new Liste_resto($dbConnection);
$restoListe->listerResto()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide restaurant</title>
</head>

<body>
    <p>Guide restaurant :</p>
    <?php echo $restoListe->displayHTMLTable() ?>
</body>

</html>