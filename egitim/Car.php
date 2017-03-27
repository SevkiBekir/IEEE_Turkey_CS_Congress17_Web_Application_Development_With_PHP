<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 10:54
 */

class Car {

    private $speed;
    private $isFuel;


    function  __construct()
    {
        $this->speed = 0;
        $this->isFuel = false;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($spe){
        $this->speed = $spe;
    }
    public function getIsFuel(){
        return $this->isFuel;
    }
    public function setIsFuel($paraIsFuel){
        $this->isFuel = $paraIsFuel;
    }
    public function printValue(){
        echo "The speed of my car is ".$this->speed;
        echo "<br/>";
        if($this->isFuel)
            echo "Also, the tank is full";
        else
            echo "Also, the tank is empty";

    }
}