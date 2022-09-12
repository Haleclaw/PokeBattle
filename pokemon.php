<?php

class pokemon {

    public $name;
    public $EnergyType;
    public $hitpoints;
    public $Attacks;
    public $Weakness;

    public function __construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness)
    {
        $this->name = $name;
        $this->EnergyType = $EnergyType;
        $this->hitpoints = $hitpoints;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;

    }

    public function __toString() {
        return json_encode($this);
    }

    public function displayPokemon()
    {
        echo '<p>' . $this->name . '</p>';
        echo '<p>' . $this->EnergyType . '</p>';
        echo '<p>' . $this->hitpoints . '</p>';
        echo '<p>' . $this->Attacks . '</p>';
        echo '<p>' . $this->Weakness . '</p>';
    }

}


?>