<?php

class resistance {

    private $resistanceName;
    private $resistanceInfo;

    public function __construct($resistanceName,$resistanceInfo){

        $this->resistanceName = $resistanceName;
        $this->resistanceInfo = $resistanceInfo;
    }

    public function getResistanceName()
    {
        return $this->resistanceName;
    }

    
    public function getresistanceInfo()
    {
        return $this->resistanceInfo;
    }
    




}




?>