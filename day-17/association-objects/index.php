<?php 

class PurchaseRequest {
    public $number;
    public $customer;
}

class Customer {
    public $name;
    public $address;
}

$customer = new Customer();
$customer->name = "Leonardo Vieira Sodré";
$customer->address = "Rua Madre Monica de Madureira";

$purchaseRequest = new PurchaseRequest();
$purchaseRequest->number = "12345";
$purchaseRequest->customer = $customer;

$data = [
    'N º' => $purchaseRequest->number,
    'Nome ' => $purchaseRequest->customer->name,
    'Endereço' => $purchaseRequest->customer->address,
];

foreach ($data as $key => $value) {
    echo $key . " : " . $value . "<br/>";
}