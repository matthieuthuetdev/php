<?php
    try {

        $myConnection = new PDO("mysql:host=localhost;port=3306;dbname=guiderestaurant;charset=utf8", "root", '');

        $pdoStatement = $myConnection->query("SELECT * FROM restaurants", PDO::FETCH_OBJ);
        $montab = $pdoStatement->fetchAll();
        echo "<pre>";
        var_export($montab);
        echo "</pre>";
    } catch (PDOException $e) {

        printf("Échec de la connexion : %s\n", $e->getMessage());
        exit();
    }