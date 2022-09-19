<?php

class pokemon {

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


    public function __toString() {
        return json_encode($this);
    }

}


?>