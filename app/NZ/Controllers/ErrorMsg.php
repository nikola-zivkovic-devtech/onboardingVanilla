<?php

namespace NZ\Controllers;

/**
 * Class ErrorMsg
 * Shows error messages.
 */
class ErrorMsg
{
    public function __construct($msg)
    {
        print_r('<br>' . $msg . '<br>');
    }
}