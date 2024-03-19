<?php

class Person
{
    public $name;

    public function __clone()
    {
        echo "Clonagem de objetos !!";
    }
}

$person = new Person();
$person->name = 'Leonardo Vieira Sodré';


$otherPerson = clone $person;
$otherPerson->name = 'Vieira Sodré';

echo "Nome : " . $otherPerson->name;