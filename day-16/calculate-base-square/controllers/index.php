<?php


class CalculateBaseSquare
{

    protected $base;
    protected $height;

    protected $result;

    public function setResult($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
        $this->result = $this->base * $this->height;
    }

    public function getResult()
    {
        echo "<h1>A base do quadrado é : {$this->result}</h1>";
    }
}

$instance = new CalculateBaseSquare();
$instance->setResult(10, 2);
$instance->getResult();
