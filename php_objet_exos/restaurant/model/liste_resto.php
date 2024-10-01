<?php
class liste_resto{
    private PDO $connection;
    private array $colName;
    public function __construct(PDO $_connection, array $_colName) {
        $this->connection = $_connection;
        $this->colName = $_colName;
    }
    public function listerResto():array{
        
    }
}