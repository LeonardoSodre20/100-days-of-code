<?php

class Dates
{
  public $day;
  public $month;
  public $year;

  public $currentHours;

  public function __construct($day, $month, $year, $currentHours)
  {
    $this->day = $day;


    $this->month = $month;


    $this->year = $year;

    $this->currentHours = $currentHours;

  }

  public function setDay($day)
  {
    $this->day = $day;

    if ($day > 31 or $day < 1) {
      echo "Insira algum dia válido !" . "<br/>";
    }
  }

  public function getDay()
  {
    if ($this->day < 10) {
      echo "Dia inserido : " . " 0" . $this->day;
    }
  }

  public function setMonth($month)
  {
    $this->month = $month;

    if ($month > 12 or $month < 1) {
      echo "Insira um mês válido !" . "<br/>";
    }

  }

  public function getMonth()
  {
    if ($this->month < 10) {
      echo "Mês inserido : " . " 0" . $this->month . "<br/>";
    } else {
      echo "Mês inserido : " . $this->month . "<br/>";
    }
  }

  public function getYear()
  {
    echo "Ano inserido : " . $this->year . "<br/>";
  }

  public function setYear($year)
  {
    $this->year = $year;

    if ($year < 1900 or $year == 0) {
      echo "Insira um ano válido !" . "<br/>";
    }
  }

  public function date()
  {
    if ($this->day < 10 and $this->month < 10) {
      echo "0" . $this->day . "/" . "0" . $this->month . "/" . $this->year . "<br/>";
    }
  }

  public function incrementDay()
  {
    if ($this->currentHours === '00:00') {
      echo "0" . $this->day + 1 . "/" . "0" . $this->month . "/" . $this->year;
    } else {
      echo "0" . $this->day . "/" . "0" . $this->month . "/" . $this->year;
    }
  }


}

$dates = new Dates(20, 12, 2015, '00:00');
$dates->setDay(3);
echo "<hr/>";
$dates->getDay();
echo "<hr/>";
$dates->setMonth(1);
$dates->getMonth();
$dates->setYear(2015);
$dates->getYear();
$dates->date();
$dates->incrementDay();