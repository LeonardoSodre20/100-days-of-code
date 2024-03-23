<?php

class Employees
{
    public $firstname;
    public $lastname;
    public $salary;
    public $yearly_salary;

    public $incremeted_salary;

    public function __construct($firstname, $lastname, $salary)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->salary = $salary;
    }

    public function getFirstName()
    {
        echo "Primeiro nome : " . $this->firstname . "<br/>";
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastName()
    {
        echo "Sobrenome : " . $this->lastname . "<br/>";
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getSalary()
    {
        echo "Salário : " . number_format($this->salary, 2, ',', '.') . "<br/>";
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;

        if ($salary < 0) {
            $this->salary = 0.0;
        }
    }

    public function getYearlySalary()
    {
        echo "Salário Anual : " . number_format($this->yearly_salary = $this->salary * 12, 2, ",", ".") . "<br/>";
    }

    public function getIncrementSalary($percent)
    {
        $this->incremeted_salary = (($percent / 100) * $this->salary) + $this->salary;

        echo "Salário com aumento de 10% : " . number_format($this->incremeted_salary, 2, ',', '.');
    }

}

$employees = new Employees('Leonardo', 'Sodré', 2580);
$employees->setFirstName('Leonardo');
$employees->getFirstName();
$employees->setLastName('Sodré');
$employees->getLastName();
$employees->setSalary(3500);
$employees->getSalary();
$employees->getYearlySalary();
$employees->getIncrementSalary(10);