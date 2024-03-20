<?php 

interface IPercentValue {
    public function setPercentWithValue($value);
}

class PercentValue implements IPercentValue {

    public $valueProduct;

    public $result;

    public function __construct($value) {
        $this->valueProduct = $value;
    }

    public function setPercentWithValue($value) {
        $this->result = ($value / 100) * $this->valueProduct + $this->valueProduct;
    }

    public function getPercentWithValue() {
        echo "R$ " . $this->result;
    }
}

$percentInstance = new PercentValue(2000);
$percentInstance->setPercentWithValue(16);
$percentInstance->getPercentWithValue();