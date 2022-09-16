<?php

    class charmeleon extends pokemon {

        public function __construct($name = 'charmeleon'){


            $EnergyType = 'Fire';
            $hitpoints = 60;
            $Attacks = 'thunder';
            $Weakness = 'water';

            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness);
        }

        



        
        

    }


?>