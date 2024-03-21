<?php

class PersonClass
{
    public function renderName($name)
    {
        echo "O Nome da pessoa é {$name}";
    }
}

class Render
{
    public $person;
    public $name;

    public function __construct($name)
    {
        $this->person = new PersonClass();
        $this->name = $name;
    }

    public function renderName()
    {
        echo $this->person->renderName($this->name);
    }
}

$renderClass = new Render('Leonardo');
$renderClass->renderName();


