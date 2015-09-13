<?php

/**
 * User: LukaszPapierz
 * Date: 2015-08-26
 * Time: 20:11
 */
class Controller_Test
{
    public function __construct()
    {
        new Model_Test();
        include "test.html";
        $tmp = Flight::get('test');
        echo "Controller_Test" . $tmp;
    }
}