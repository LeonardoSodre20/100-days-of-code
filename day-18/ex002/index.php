<?php 

class Sum {
    public function SumNumbers($number) {
        for($n = 1; $n <= 20; $n++) {
            echo $n * $number . '<br/>';
        }
    }
}

$sum = new Sum();
$sum->SumNumbers(2);