<?php
class Contribuable
{
    private string $nom;
    private string $prenom;
    private float $revenu;
    const TOT1 = 0.09;
    const TOT2 = 0.14;
    const PALIER = 15000;

    public function __construct($_nom, $_prenom, $_revenu)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->revenu = round($_revenu, 2);
    }
    public function getRevenu(): float
    {
        return $this->revenu;
    }
    function setRevenu($_newrevenu)
    {
        $this->revenu = round($_newrevenu, 2);
    }
    public function calculerImpot(): float
    {
        if ($this->revenu > self::PALIER) {
            return self::TOT1 * self::PALIER + ($this->revenu - self::PALIER) * self::TOT2;
        } else {
            return $this->revenu = self::TOT1;
        }
    }
}
