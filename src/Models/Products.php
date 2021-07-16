<?php

namespace App\Classes;

class Products 
{
    string $name;
    String $companie;
    string $provider;
    float $price;
    int $quantity;
    int $mi_quantity;

    function __construct($name, $companie, $provider, $price, $quantity, $mi_quantity)
    {
        $this->name = $name;
        $this->companie = $companie;
        $this->provider = $provider;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->mi_quantity = $mi_quantity;
    }
}