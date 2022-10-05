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

        // all get //

        public function getName(){
            return $this->name;
        }

        public function getEneryType(){
            return $this->EnergyType;
        }

        public function getHitpoints(){
            return $this->hitpoints;
        }

        public function getAttacks(){
            return $this->Attacks;
        }

        public function getWeakness(){
            return $this->Weakness;
        }

        public function getResistance(){
            return $this->Resistance;
        }

        // all set //

        public function setHitpoints($updatedHitpoints){
            $this->hitpoints = $updatedHitpoints;
        }

        



        
        

    }


?>