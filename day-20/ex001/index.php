<?php

interface IServiceInvoiceContract
{
    public function getNumberItem();
    public function setNumberItem($numberItem);
    public function getDescription();
    public function setDescription($description);
    public function getQtdItem();
    public function setQtdItem($qtdItem);
    public function getUnityValue();
    public function setUnityValue($unityValue);
    public function getInvoiceAmount();
}


class Invoice implements IServiceInvoiceContract
{
    public $number_item;

    public $description;

    public $qtdItem;

    public $unityValue;

    public $result_invoice;

    public function __construct($number_item, $description, $qtdItem, $unityValue)
    {
        $this->number_item = $number_item;
        $this->description = $description;
        if ($qtdItem < 0) {
            $this->qtdItem = 0;
        } else {
            $this->qtdItem = $qtdItem;
        }
        if ($unityValue) {
            $this->unityValue = 0.0;
        } else {
            $this->unityValue = $unityValue;
        }


    }
    public function getNumberItem()
    {
        echo "Nº Fatura : " . $this->number_item . "<br/>";
    }

    public function setNumberItem($number_item)
    {
        $this->number_item = $number_item;
    }

    public function getDescription()
    {
        echo "Descrição da fatura : " . $this->description . "<br/>";
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getQtdItem()
    {
        echo "Quantidade do item : " . $this->qtdItem . "<br/>";
    }

    public function setQtdItem($qtdItem)
    {
        $this->qtdItem = $qtdItem;

        if ($this->qtdItem < 0) {
            $this->qtdItem = 0;
        }
    }

    public function getUnityValue()
    {
        echo "Valor unitário : " . number_format($this->unityValue, 2, ',', ".") . "<br/>";
    }

    public function setUnityValue($unityValue)
    {
        $this->unityValue = $unityValue;

        if ($this->unityValue < 0) {
            $this->unityValue = 0.0;
        }
    }

    public function getInvoiceAmount()
    {
        $this->result_invoice = $this->qtdItem * $this->unityValue;

        echo "Valor da fatura : " . number_format($this->result_invoice, 2, '.', ',');
    }
}

$invoice = new Invoice(573126, 'Teste descrição', 10, 250.00);
$invoice->setNumberItem(573126);
$invoice->getNumberItem();
$invoice->setDescription('Fatura de cartão de crédito do mês de abril.');
$invoice->getDescription();
$invoice->setQtdItem(25);
$invoice->getQtdItem();
$invoice->setUnityValue(2500);
$invoice->getUnityValue();
$invoice->getInvoiceAmount();