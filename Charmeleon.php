<?php

    class charmeleon extends pokemon {

        public function __construct(){

            parent::__construct('charmeleon', new energytype('Fire'), 60, new attack('Head Butt',10,'Flare',30), new weakness('water',2), new resistance('Lightning',10));
        }
    }
?>