<?php

class Joueur
{
    private $firstName;
    private $name;
    private $bDays;
    private $country;
    private Equipe $team;

    public function __construct($firstName, $name, $bDays, $country, $team)
    {
        $this->firstName = $firstName;
        $this->name = $name;
        $this->bDays = $bDays;
        $this->country = $country;
        $this->team = $team;
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
    public function getTeam()
    {
        return $this->team;
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
    public function setTeam($team)
    {
        $this->team = $team;
    }

    public function __toString()
    {
        return "ok";
    }
}