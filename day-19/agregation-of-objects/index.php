<?php

class Products
{
    public $name;
    public $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

}

class Cart
{
    public $product;

    public function addProductsInCart(Products $products)
    {
        $this->product[] = $products;
    }

    public function renderProducts()
    {
        foreach ($this->product as $product) {
            echo $product->name . "<br/>";
            echo $product->value . "<hr/>";
        }
    }
}

$product1 = new Products('Notebook', 2500);
$product2 = new Products('Celular', 1500);

$cart = new Cart();
$cart->addProductsInCart($product1);
$cart->addProductsInCart($product2);
$cart->renderProducts();