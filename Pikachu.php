<?php

    class pikachu extends pokemon {

        public function __construct($name = 'pikachu'){

            $name = 'pikachu';
            $EnergyType = 'Lightning';
            $hitpoints = 60;
            $Attacks = 'Electric Ring';
            $Weakness = 'Fire';
            $Resistance = 'Fighting';
            

            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance);
        }

        



        
        

    }


?>