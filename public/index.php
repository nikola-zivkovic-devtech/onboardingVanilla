<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 04-Oct-17
 * Time: 10:10
 */


require_once '../bootstrap/bootstrap.php';



$dispatcher->add('/');
$dispatcher->add('/index');
$dispatcher->add('/hello');
$dispatcher->add('/chair');
$dispatcher->add('/sofa');

$dispatcher->run();
