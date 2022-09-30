<?php

class pokemon
{

    public $name;
    public $EnergyType;
    public $hitpoints;
    public $Attacks;
    public $Weakness;
    public $Resistance;

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

        if ($pikachu->hitpoints == 0) {
            $pokemonsAlive - 1;
        }

        if ($charmeleon->hitpoints == 0) {
            $pokemonsAlive - 1;
        } else {
            echo $pokemonsAlive;
        }
    }

    // this function let the pokemons fight and return the result //
    function pokemonFight($pikachu, $charmeleon)
    {
        // display hitpoints//
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints;
        echo "<br>";

        // Pikachu attacks // 
        echo $pikachu->name . '  attack with ' . $pikachu->Attacks->attackName;
        $charmeleon->hitpoints = $charmeleon->hitpoints - $pikachu->Attacks->attackStats;


        // display hitpoints//
        echo "<br>";
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints;


        // charmeleon attacks //
        echo "<br>";
        echo $charmeleon->name . '  attack with ' . $charmeleon->Attacks->attackName2;
        $pikachu->hitpoints = $pikachu->hitpoints - $charmeleon->Attacks->attackStats2;

        // display hitpoints//
        echo "<br>";
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints;
    }
}
