

<?php 

class SumNumbers {
    public $numberOne;
    public $numberTwo;

    public $result;

    public function __construct($numberOne, $numberTwo) {
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function sumNumber() {
        $this->result = $this->numberOne + $this->numberTwo;

        if($this->result > 20) {
            echo "A soma tem resultado maior que 20 == " . $this->result + 8;
        }else{
            echo "A soma tem resultado menor que 20 == " . $this->result - 5;
        }
    }
}

$sum = new SumNumbers(10,15);
$sum->sumNumber();