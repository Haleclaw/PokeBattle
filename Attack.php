<?php

class attack {

    private $attackName;
    private $attackStats;
    private $attackName2;
    private $attackStats2;
    

    public function __construct($attackName,$attackStats,$attackName2,$attackStats2){

        $this->attackName = $attackName;
        $this->attackStats = $attackStats;
        $this->attackName2 = $attackName2;  
        $this->attackStats2 = $attackStats2;  
    }

    public function getAttackName(){
        return $this->attackName;
    }

    public function getAttackStats(){
        return $this->attackStats;
    }

    public function getAttackName2(){
        return $this->attackName2;
    }

    public function getAttackStats2(){
        return $this->attackStats2;
    }
    




}




?>