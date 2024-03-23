<?php


class CalculateSalary
{

    public $perHourValue;

    public $perMonthHours;

    public $result;

    public $inssValue;

    public $irValue;

    public $syndicateValue;

    public $netSalary;

    public function calculteSalary($perHourValue, $perMonthHours)
    {
        $this->perHourValue = $perHourValue;
        $this->perMonthHours = $perMonthHours;
        $this->result = $this->perHourValue * $this->perMonthHours;
    }

    public function calculatePercentOfINSS($percent)
    {
        $this->inssValue = ($percent / 100) * $this->result;
    }

    public function calculatePercentOfIR($percent)
    {
        $this->irValue = ($percent / 100) * $this->result;
    }

    public function calculatePercentOfSyndicate($percent)
    {
        $this->syndicateValue = ($percent / 100) * $this->result;
    }

    public function calculateNetSalary()
    {
        $this->netSalary = $this->result - $this->inssValue - $this->irValue - $this->syndicateValue;
    }

    public function getResults()
    {
        echo "<h3>Horas trabalhadas no mês {$this->perMonthHours}</h3>";
        echo "<h3>Preço da hora: {$this->perHourValue}</h3>";
        echo "<h3>Salário bruto : R$ {$this->result}</h3>";
        echo "<h3>Valor descontado pelo INSS : R$ {$this->inssValue}</h3>";
        echo "<h3>Valor descontado pelo Imposto de renda : R$ {$this->irValue}</h3>";
        echo "<h3>Valor descontado pelo sindicato : R$ {$this->syndicateValue}</h3>";
        echo "<h3>Salário liquido : R$ {$this->netSalary}</h3>";
    }

}

$salary = new CalculateSalary();
$salary->calculteSalary(10.50, 60);
$salary->calculatePercentOfINSS(8);
$salary->calculatePercentOfIR(11);
$salary->calculatePercentOfSyndicate(5);
$salary->calculateNetSalary();
$salary->getResults();