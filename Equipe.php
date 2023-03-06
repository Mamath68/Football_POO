<?php

class Equipe
{

    private $name;
    private $dateCreation;
    private Pays $country;

    public function __construct($name, $dateCreation, $country)
    {
        $this->name = $name;
        $this->dateCreation = $dateCreation;
        $this->country = $country;

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
        $this->contry = $country;
    }

    public function __toString()
    {
        return "OK";
    }
}