<?php

namespace NZ\Controllers;

use NZ\Managers\Furniture;
use NZ\Interfaces\IFurniture;

/**
 * Class Sofa
 */
class Sofa extends Furniture implements IFurniture
{
    public function __construct()
    {
        parent::__construct();
    }

    public function printName()
    {
        print_r('Picture a picture of a sofa.');
    }
}