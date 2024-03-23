<?php

class MultiplacationTable
{
    public $result;
    public $numberForMult;

    public function __construct($number)
    {
        $this->numberForMult = $number;
    }

    public function renderAndProcessMultiplicationTable()
    {
        for ($n = 1; $n <= $this->numberForMult; $n++) {
            for ($i = 0; $i < 10; $i++) {
                $this->result = $n . " x " . $i + 1 . " = " . $n * ($i + 1) . "<br/>";
                echo "
                    <div>
                        <h3>{$this->result}</h3>
                    </div>
                ";
            }
        }
    }

}

$multTable = new MultiplacationTable(20);
$multTable->renderAndProcessMultiplicationTable();