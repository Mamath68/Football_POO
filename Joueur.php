<?php

class Joueur
{
    private $firstName;
    private $name;
    private $bDays;
    private $country;
    private array $carriere;

    public function __construct($firstName, $name, $bDays, $country)
    {
        $this->firstName = $firstName;
        $this->name = $name;
        $this->bDays = $bDays;
        $this->country = $country;
        $this->carriere = [];
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getBdays()
    {
        return $this->bDays;
    }
    public function getCountry()
    {
        return $this->country;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBdays($bDays)
    {
        $this->bDays = $bDays;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function addPlayer($carriere)
    {
        $this->carriere[] = $carriere;
    }

    public function __toString()
    {
        return $this->getFirstName() . " " . $this->getName() . " " . date_format($this->getBdays(), 'd-m-Y') . " " . $this->getCountry();
    }
}