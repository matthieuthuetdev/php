<?php
class Database
{
    public object $BDD;
    public function initDatabase(): ?PDO
    {
        try {

            $this->BDD = new PDO("mysql:host=localhost;port=3306;dbname=guiderestaurant;charset=utf8", "root", '');
            return $this->BDD;
        } catch (PDOException $e) {

            return null;
        }
    }
    public function displayRestaurant()
    {
        $pdoStatement = $this->BDD->query("SELECT * FROM restaurants", PDO::FETCH_OBJ);
        $montab = $pdoStatement->fetchAll();
        $HTMLTable = "<table> <thead><th>Nom</th><th>Adresse</th><th>prix</th><th>Commentaire</th><th>Note</th><th>Visite</th></thead><tbody>";


        for ($i = 0; $i < count($montab); $i++) {
            // foreach ($montab as $line) {
                $restaurantCourrant = $montab[$i];
                $HTMLTable .= "<tr><td>$restaurantCourrant->nom</td><td>$restaurantCourrant->adresse</td><td>$restaurantCourrant->prix</td><td>$restaurantCourrant->commentaire</td><td>$restaurantCourrant->note</td><td>$restaurantCourrant->visite</td></tr>";
            // }
        }
        return $HTMLTable;
    }
}
