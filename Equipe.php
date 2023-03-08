<?php
class Equipe
{

    private $name;
    private int $dateCreation;
    private Pays $country;
    private array $carrieres;

    public function __construct($name, $dateCreation, $country)
    {
        $this->name = $name;
        $this->dateCreation = $dateCreation;
        $this->country = $country;
        $this->carrieres = [];
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    public function getCountry()
    {
        return $this->country;
    }


    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCarriere($carriere)
    {
        $this->carrieres = $carriere;
    }

    public function addCarriere( Carriere $carriere)
    {
        echo "<p>" . $this->getName() . " " . $this->getDateCreation() . " " . $this->getCountry() . "</p>";
    }

    public function __toString()
    {
        return $this->getName() . " " . $this->getDateCreation() . " " . $this->getCountry();
    }
}

