<?php 
    include_once __DIR__ . "./Vehicle.php";
    $instanceVehicle = new Vehicle(false);

    class Car extends Vehicle {    
    }

    class Motocycle extends Vehicle {
    }

    $instance = new Car(false);
    $instance->ToFuel();
    $instance_motocycle = new Motocycle(true);
    $instance_motocycle->ToFuel();
    $instance_motocycle->TurnOnHeadlight();
