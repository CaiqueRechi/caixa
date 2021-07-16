<?php

namespace App\Classes;

use Providers;

class App\Classes\Bills
{
    Providers $providers;
    string $due;
    float $price;
    float $price_payd;

    function __construct($providers, $due, $price, $price_payd)
    {
        $this->providers = $providers;
        $this->due = $due;
        $this->price = $price;
        $this->price_payd = $price_payd;
    }
    
}