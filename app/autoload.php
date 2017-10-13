<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 04-Oct-17
 * Time: 16:13
 */


function autoloadClasses($className) {
    $filename = __DIR__ . '\\' . $className . '.php';
    if (is_readable($filename)) {
        require_once $filename;
    }
}

spl_autoload_register('autoloadClasses');