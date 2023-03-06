<?php

class Equipe
{

    private $name;
    private $dateCreation;
    private $country;
    private Joueur $player;
    private array $carriere;

    public function __construct($name, $dateCreation, $country, $player)
    {
        $this->name = $name;
        $this->dateCreation = $dateCreation;
        $this->country = $country;
        $this->player = $player;
        $this->carriere = [];
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
        $this->carriere = $carriere;
    }

    public function addCarriere($carriere)
    {
        $this->carriere[] = $carriere;
    }

    public function __toString()
    {
        return $this->getName() . " " . date_format($this->getDateCreation(), 'd-m-Y') . " " . $this->getCountry();
    }
}