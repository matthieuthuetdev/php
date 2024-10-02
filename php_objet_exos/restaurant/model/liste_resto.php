<?php
class Liste_resto
{
    private PDO $connection;
    private array $colName;
    private array $result;
    public function __construct(PDO $_connection)
    {
        $this->connection = $_connection;
    }
    public function listerResto(): array
    {
        $pdoStatement = $this->connection->query("SELECT * FROM restaurants", PDO::FETCH_OBJ);
        $montab = $pdoStatement->fetchAll();

        $this->result = $montab;
        return $montab;
    }
    public function displayHTMLTable()
    {
        $this->listerResto();
        $HTMLTable = "<table> <thead><th>Nom</th><th>Adresse</th><th>prix</th><th>Commentaire</th><th>Note</th><th>Visite</th></thead><tbody>";
        for ($i = 0; $i < count($this->result); $i++) {
            $restaurantCourrant = $this->result[$i];
            $HTMLTable .= "<tr><td>$restaurantCourrant->nom</td><td>$restaurantCourrant->adresse</td><td>$restaurantCourrant->prix</td><td>$restaurantCourrant->commentaire</td><td>$restaurantCourrant->note</td><td>$restaurantCourrant->visite</td></tr>";
        }
        return $HTMLTable;
    }
    public function seartchResto($_id):array
    {$rq="SELECT * FROM restaurants WHERE id =:id";
        $seartchRequest = $this->connection->prepare($rq);
        $seartchRequest->bindParam(":id", $_id, PDO::PARAM_INT);
        $seartchRequest->execute();
        $resto = $seartchRequest->fetchAll(PDO::FETCH_ASSOC);
        return $resto;
    }
    private function INFO_TABLE() {}
}
