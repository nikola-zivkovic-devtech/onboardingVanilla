<?php

namespace NZ\Services;

/**
 * Class Hello
 * Loads the Hello page.
 */
class Hello
{
    private $name;

    public function __construct($name = null) {

        if (!isset($name)) {
            throw new \InvalidArgumentException("Enter your name too, so we can say 'Hi'.");
        } else {
            $this->name = $name;
            print_r("Hello, $this->name.");
        }
    }
}