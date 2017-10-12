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

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello, $this->name.";
    }
}