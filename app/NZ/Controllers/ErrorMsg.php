<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 09-Oct-17
 * Time: 17:12
 */

namespace NZ\Controllers;

/**
 * Class ErrorMsg
 * Shows error messages.
 */
class ErrorMsg
{
    public function __construct($msg)
    {
        echo '<br>' . $msg . '<br>';
    }
}