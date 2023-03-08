<?php

class Joueur
{
    private $firstName;
    private $name;
    private DateTime $bDays;
    private $nationality;
    private array $carrieres;
    private Pays $pays;

    public function __construct($firstName, $name, $bDays, $nationality, $pays)
    {
        $this->firstName = $firstName;
        $this->name = $name;
        $this->bDays = new DateTime($bDays);
        $this->nationality = $nationality;
        $this->pays = $pays;
        $this->carrieres = [];
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
    public function getNationality()
    {
        return $this->nationality;
    }
    public function getPays()
    {
        return $this->pays;
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
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    public function addCarriere(Carriere $carriere)
    {
        echo "<p>" . $this->getFirstName() . " " . $this->getName() . " " . date_format($this->getBdays(), 'd-m-Y') . " " . $this->getNationality() . " " . $this->getPays() . "</p>";
    }

    public function calculateAge()
    {
        // recuper datenaissance de la personne dans variable.
        // diff entre les deux dates
        //return format en année (Y)
        $bday = $this->getBdays();
        $now = new DateTime();
        $diff = $now->diff($bday);

        return $diff->y;
    }
    public function afficherPlayer()
    {
        echo "<h1>" . $this->getfirstName() . " " . $this->getname() . " " . $this->calculateAge() . " ans. </h1>";
    }
    public function __toString()
    {
        return $this->getFirstName() . " " . $this->getName() . " " . date_format($this->getBdays(), 'd-m-Y') . " " . $this->getNationality();
    }
}