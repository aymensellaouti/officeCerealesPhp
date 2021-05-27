<?php


class Voiture
{
    private $marque;
    private $couleur;
    private $vitesse;
    private $nbreCheveau;

    public const NOMBRE_ROUS = 4;
    /**
     * Voiture constructor.
     * @param $marque
     * @param $couleur
     * @param $vitesse
     * @param $nbreCheveau
     */
    public function __construct(
        $marque = '',
        $couleur = '',
        $vitesse = 0,
        $nbreCheveau = 4)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
        $this->nbreCheveau = $nbreCheveau;
        self::$nbreVoiture++;
    }

    private static $nbreVoiture = 0;

    public static function getNombreDeVoiture() {
        return self::$nbreVoiture;
    }
    public function comparer(Voiture $voiture): bool {
        return ($this->vitesse >= $voiture->vitesse );
    }
    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse): void
    {
        if ($vitesse < 200) {
            $this->vitesse = $vitesse;
        } else {
            echo "Vous ne pouvez pas dépasser 200 km";
        }
    }

    /**
     * @return mixed
     */
    public function getNbreCheveau()
    {
        return $this->nbreCheveau;
    }

    /**
     * @param mixed $nbreCheveau
     */
    public function setNbreCheveau($nbreCheveau): void
    {
        $this->nbreCheveau = $nbreCheveau;
    }

    public function __toString()
    {
        return "Je suis une {$this->marque}, ma vitesse est {$this->vitesse}, ma couleur est {$this->couleur} et le nombre de mes cheveaux est {$this->getNbreCheveau()}";
    }

}

