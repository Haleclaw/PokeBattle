<?php

    class pikachu extends pokemon {

        public function __construct($name = 'pikachu'){


            $EnergyType = 'Lightning';
            $hitpoints = 60;
            $Attacks = 'thunder';
            $Weakness = 'Fire';

            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness);
        }

        



        
        

    }


?>