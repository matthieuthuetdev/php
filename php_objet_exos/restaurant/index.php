<?php
require "./model/Database.php";
require "./model/Liste_resto.php";
$db = new Database();

$dbConnection = $db->initDatabase();
$restoListe = new Liste_resto($dbConnection);
$restoListe->listerResto();
if(isset($_POST["add"])){
    var_dump($_POST);
    $restoListe->addResto($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide restaurant</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Guide restaurant :</h1>
    <?php echo $restoListe->displayHTMLTable() ?>
    <a href="./addrestaurant.html" class="btn">Ajouter</a>
    
</body>

</html>