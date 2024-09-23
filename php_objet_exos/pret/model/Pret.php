<?php
class Pret
{
    private float $capitalEmprunter;

    private float $mensualite;
    private float $tauxInteretMensuel;
    private int $nbmois;

    public function __construct(float $_capitalEmprunter, float $_taux, int $_nbannee)
    {
        $this->capitalEmprunter = $_capitalEmprunter;
        $this->tauxInteretMensuel = $_taux / 1200;
        $this->nbmois = $_nbannee * 12;
        $this->mensualite = 0;
    }
    public function calculMensualite(): float
    {
        $q = (1 - pow(1 + $this->tauxInteretMensuel, -$this->nbmois));

        $this->mensualite = ($this->capitalEmprunter * $this->tauxInteretMensuel) / $q;
        return round($this->mensualite, 2);
    }
    public function tableauAmortissement()
    {
        $htmlTable = "<table><thead><th>numero de mois</th><th>intérêt</th>partie Amortissement</th><th>capital restant dû</th></thead>";
        for ($numMois = 1; $numMois <= $this->nbmois; $numMois++) {
            $htmlTable .= "<tr><td>$numMois </td><td>$this->tauxInteretMensuel</td><td>";
        }
        $htmlTable .= "</table>";
    }
}
