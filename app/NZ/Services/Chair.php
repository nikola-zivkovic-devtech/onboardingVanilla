<?php

namespace NZ\Services;

use NZ\Contracts\Furniture;
use NZ\Contracts\IFurniture;

/**
 * Class Chair
 */
class Chair extends Furniture implements IFurniture
{
    public function __construct()
    {
        parent::__construct();
    }

    public function printName()
    {
        print_r('Picture a picture of a chair.');
    }
}