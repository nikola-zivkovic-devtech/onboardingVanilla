<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 05-Oct-17
 * Time: 11:11
 */

namespace Managers;


class Dispatcher {

    private $url = array();

    public function add($url) {
        $this->url[] = $url;
    }

    public function printRoutsList() {
        print_r($this->url);
    }
}
