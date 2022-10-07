<?php

    require 'Attack.php';
    require 'Weakness.php';
    require 'Resistance.php';
    require 'EnergyType.php';

    class pikachu extends pokemon {

        public function __construct(){

            parent::__construct('pikachu', new energytype('Lightning'), 60, new attack('Electric Ring',50,'Pika Punch',20), new weakness('Fire',1,5), new resistance('Fighting',20));
        }
    }
?>