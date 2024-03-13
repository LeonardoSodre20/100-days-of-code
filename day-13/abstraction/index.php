<?php

abstract class Bank
{
    protected $money;
    protected $limitMoney;

    public function setMoney($value)
    {
        $this->money = $value;
    }

    public function getMoney()
    {
        return $this->money;
    }

    abstract protected function InsertMoney($value);
    abstract protected function UpdateMoney($value);
}

class NuBank extends Bank
{
    public function InsertMoney($value)
    {
        $this->money += $value;
    }

    public function UpdateMoney($value)
    {
        $this->money -= $value;
    }
}

$instance = new NuBank();
$instance->setMoney(3000);
$instance->UpdateMoney(1000);
echo "<hr/> SALDO : " . $instance->getMoney();
