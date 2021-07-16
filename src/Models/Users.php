<?php

namespace App\Classes;

class Users
{
    string $name;
    float $permission;

    function __construct($name, $permission);
    $this->name = $name;
    $this->permission = $permission;
}


