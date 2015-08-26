<?php
/**
 * User: LukaszPapierz
 * Date: 2015-08-22
 *
 */

set_include_path(get_include_path() . PATH_SEPARATOR . 'www');
set_include_path(get_include_path() . PATH_SEPARATOR . 'application');
set_include_path(get_include_path() . PATH_SEPARATOR . 'exceptions');
set_include_path(get_include_path() . PATH_SEPARATOR . 'core');

//testowo
set_include_path(get_include_path() . PATH_SEPARATOR . 'application/view');

function phpmvc_autoloader($class) {
        $className = end(explode("_", $class));
        $path = explode("_", strtolower($class));
        $inlucePath = "";
        for ($i = 0; $i < count($path) - 1; $i++) {
            $inlucePath .= $path[$i];
            $inlucePath .= "/";
        }
        $inlucePath .= $className;
        $inlucePath .= ".php";
        include_once $inlucePath;
}