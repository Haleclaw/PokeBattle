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

        if ($pikachu->gethitpoints() <= 0) {
            $pokemonsAlive--;
            echo $pokemonsAlive;
        }

        if ($charmeleon->gethitpoints() <= 0) {
            $pokemonsAlive--;
            echo $pokemonsAlive;
        } 
        
        else {
            echo $pokemonsAlive;
        }
    }


    // this function let the pokemons fight and return the result //
    function pokemonFight($pikachu, $charmeleon)
    {
        // display hitpoints//
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();
        echo "<br>";

        // Pikachu attacks // 
        echo $pikachu->getName() . '  attack with ' . $pikachu->Attacks->attackName;
        $updatedHitpoints = $charmeleon->hitpoints - $pikachu->Attacks->attackStats;
        $charmeleon->setHitpoints($updatedHitpoints); 


        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();


        // charmeleon attacks //
        echo "<br>";
        echo $charmeleon->getName() . '  attack with ' . $charmeleon->Attacks->attackName2;
        $updatedHitpoints = $pikachu->hitpoints - $charmeleon->Attacks->attackStats2;
        $pikachu->setHitpoints($updatedHitpoints); 

        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints(). ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();

        // Pikachu attacks // 
        echo '<br>';
        echo $pikachu->getName() . '  attack with ' . $pikachu->Attacks->attackName2;
        $updatedHitpoints = $charmeleon->hitpoints - $pikachu->Attacks->attackStats2;
        $charmeleon->setHitpoints($updatedHitpoints); 

        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();

        
        
        
    }
}
