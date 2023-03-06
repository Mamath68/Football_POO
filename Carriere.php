<?php

class Carriere
{

    private Joueur $player;
    private Equipe $team;
    private DateTime $dateRecrutement;

    public function __construct($player, $team, $dateRecrutement)
    {
        $this->player = $player;
        $this->team = $team;
        $this->dateRecrutement = $dateRecrutement;

    }

    public function getPlayer()
    {
        return $this->player;
    }
    public function getTeam()
    {
        return $this->team;
    }
    public function getDateRecrutement()
    {
        return $this->dateRecrutement;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }
    public function setTeam($team)
    {
        $this->team = $team;
    }
    public function setDateRecrutement($dateRecrutement)
    {
        $this->dateRecrutement = $dateRecrutement;
    }

    public function __toString()
    {
        return "OK";
    }
}