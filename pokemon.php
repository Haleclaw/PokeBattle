<?php

class pokemon
{

    private $name;
    private $EnergyType;
    public $hitpoints;
    private $Attacks;
    private $Weakness;
    private $Resistance;

    public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance)
    {
        $this->name = $name;
        $this->EnergyType = $EnergyType;
        $this->hitpoints = $hitpoints;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }


    public function __toString()
    {
        return json_encode($this);
    }


    // gets the number of pokemons alive //
    public function getPopulation($pikachu, $charmeleon)
    {
        $pokemonsAlive = 2;

        if ($pikachu->gethitpoints() <= 0) {
            $pokemonsAlive--;
            echo $pokemonsAlive;
        }

        if ($charmeleon->gethitpoints() <= 0) {
            $pokemonsAlive--;
            echo $pokemonsAlive;
        } else {
            echo $pokemonsAlive;
        }
    }

    // all get //

    public function getName()
    {
        return $this->name;
    }

    public function getEneryType()
    {
        return $this->EnergyType;
    }

    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    public function getAttacks()
    {
        return $this->Attacks;
    }

    public function getWeakness()
    {
        return $this->Weakness;
    }

    public function getResistance()
    {
        return $this->Resistance;
    }

    // all set //

    public function setHitpoints($updatedHitpoints)
    {
        $this->hitpoints = $updatedHitpoints;
    }
}
