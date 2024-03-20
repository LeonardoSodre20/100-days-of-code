<?php 

class MultiplicateTable {

    public function renderMultiplicateTable() {
        for($i = 1; $i <= 10; $i++) {
            for($n = 1; $n <=10; $n++) {
                echo $i . " x " . $n . " = " . $i * $n . "<br/>";
            }
        }
    }
}

$multTable = new MultiplicateTable();
$multTable->renderMultiplicateTable();
