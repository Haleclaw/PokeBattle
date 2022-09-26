<?php

    require 'Attack.php';
    require 'Weakness.php';
    require 'Resistance.php';
    require 'EnergyType.php';

    class pikachu extends pokemon {

        public function __construct($name = 'pikachu'){

            $name = 'pikachu';
            $EnergyType = new energytype('Lightning');
            $hitpoints = 60;
            $Attacks = new attack('Electric Ring',50,'Pika Punch',20);
            $Weakness = new weakness('Fire',1,5);
            $Resistance = new resistance('Fighting',20);
            

            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance);
        }

        



        
        

    }


?>