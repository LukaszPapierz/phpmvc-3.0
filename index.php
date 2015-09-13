<?php
/**
 * User: LukaszPapierz
 * Date: 2015-08-22
 * Time: 17:10
 */

require_once 'core/flight/Flight.php';
require_once 'core/config/config.php';
require_once 'core/init.php';
require_once 'auto_loader.php';
require_once 'core/routing.php';

spl_autoload_register('phpmvc_autoloader');

Flight::start();
