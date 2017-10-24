<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 23-Oct-17
 * Time: 12:31
 */

namespace NZ\Controllers;

use NZ\Enums\NamespacePaths;

/**
 * class Store
 *
 * Controller that points to store handler classes.
 */
class Store
{
    public function __construct($className)
    {
        $className = NamespacePaths::STORE_PATH . $className;

        $obj = new $className;
        var_dump($obj);
    }

}