<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 05-Oct-17
 * Time: 12:43
 */

namespace NZ\Controllers;


class Hello {

    private $name;

    public function __construct($name = null) {

        if (!isset($name)) {
            throw new \InvalidArgumentException("Enter your name too, so we can say 'Hi'.");
        } else {
            $this->name = $name;
            echo "Hello, $this->name.";
        }
    }
}