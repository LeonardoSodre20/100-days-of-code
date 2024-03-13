<?php
class Person
{
    public $name;
    public $age;

    public function About()
    {
        echo "Nome : " . $this->name . " Idade : " . $this->age;
    }

    public function Talk()
    {
        echo "Talked";
    }
}

$instance = new Person();
$instance->name = 'Leonardo Vieira Sodré';
$instance->age = 23;
$instance->About();
$instance->Talk();
