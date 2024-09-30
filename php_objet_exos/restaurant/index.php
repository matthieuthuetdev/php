<?php
require "./model/database.php";
$database = new Database();
$database->initDatabase();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide restaurant</title>
</head>
<body>
    <p>résultat de la connexion a la base de donnée :</p>
<?php echo $database->displayRestaurant() ?>
</body>
</html>