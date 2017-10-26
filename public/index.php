<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 04-Oct-17
 * Time: 10:10
 */


require_once '../bootstrap/bootstrap.php';



$dispatcher->add('/', "Welcome");
$dispatcher->add('/index', "Welcome");
$dispatcher->add('/hello', "Hello");
$dispatcher->add('/chair', "Store");
$dispatcher->add('/sofa', "Store");

$dispatcher->run();
