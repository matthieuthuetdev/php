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
    public function calculMensualite() {
        $q = (1-(1+$this->tauxInteretMensuel))
        $this->mensualite = mt_po;
    }
}
