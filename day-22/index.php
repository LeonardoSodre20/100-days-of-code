<?php

class Bank
{
    public $clients = [];

    public function setClients($clients = [])
    {
        $this->clients = $clients;
    }

    public function getClients()
    {
        foreach ($this->clients as $client) {
            echo "Cliente : " . $client . "<br/>";
        }
    }
}

$bank = new Bank();
$bank->setClients(['Leonardo', 'José', 'Alessandra']);
$bank->getClients();