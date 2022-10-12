<?php

class weakness {

    private $weaknessName;
    private $weaknessInfo;

    public function __construct($weaknessName,$weaknessInfo){

        $this->weaknesName = $weaknessName;
        $this->attackInfo = $weaknessInfo;
    }

    public function getWeaknessName()
    {
        return $this->weaknessName;
    }

    public function getWeaknessInfo()
    {
        return $this->weaknessInfo;
    }




}




?>