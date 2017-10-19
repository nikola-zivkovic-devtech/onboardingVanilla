<?php

namespace NZ\Contracts;

class Furniture
{
    public $name;
    public $price;
    public $color;
    public $inStock;

    public function __construct()
    {
        print_r('This is a one of our furniture pieces:<br><br>');
    }
}