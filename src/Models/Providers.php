<?php

namespace App\Classes;

class Providers
{
    string $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}
