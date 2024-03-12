<?php 
class Vehicle {
    public $isOn = false;

    public function __construct($isOnValue) {
        $this->isOn = $isOnValue;
    }

    public function ToFuel() {
        echo "<br/>";
        echo "Veículo abastecido !!!";
        }

    public function TurnOnHeadlight() {
        if($this->isOn) {
            echo "A Luz está ligada !!";
        }else{
            echo "A Luz não está ligada !!";
        }
    }
}
