<?php

interface IServiceCount
{
    public function resetCount();
    public function incrementCount($counter);

    public function getCounterValue();

}

class Count implements IServiceCount
{
    public $counter = 10;
    public function resetCount()
    {
        $this->counter = 0;
    }

    public function incrementCount($counter)
    {
        $this->counter += $counter;
    }

    public function getCounterValue()
    {
        echo "Valor do contador : " . $this->counter;
    }
}

$countInstance = new Count();
$countInstance->getCounterValue();
$countInstance->resetCount();