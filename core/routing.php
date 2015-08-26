<?php
/**
 * User: LukaszPapierz
 * Date: 2015-08-22
 * Time: 17:18
 */

Flight::route('/index.php', function(){
    Flight::redirect('/');
});

Flight::route('/', function(){
   new Controller_Testrr();
});