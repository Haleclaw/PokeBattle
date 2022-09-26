<?php

    class charmeleon extends pokemon {

        public function __construct($name = 'charmeleon'){

            $name = 'charmeleon';
            $EnergyType = new energytype('Fire');
            $hitpoints = 60;
            $Attacks = new attack('Head Butt',10,'Flare',30);
            $Weakness = new weakness('water',2);
            $Resistance = new resistance('Lightning',10);

            parent::__construct($name, $EnergyType, $hitpoints, $Attacks, $Weakness, $Resistance);
        }

        



        
        

    }


?>