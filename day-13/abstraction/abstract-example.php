<?php

abstract class AbstractClass
{
    // Force extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method

    public function printOut()
    {
        echo $this->getValue() . "\n";
    }

}

class ConcreteClass extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass";
    }
}

$instanceConcrete = new ConcreteClass();
$instanceConcrete->printOut();
echo $instanceConcrete->prefixValue('FOO_') . '\n';