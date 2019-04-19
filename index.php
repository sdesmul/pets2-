<?php
/**
 * Created by PhpStorm.
 * User: Samantha DeSmul
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class/ fat free object
$f3 = Base::instance();

//Define a default root, there can be multiple routes
$f3->route('GET /', function(){
    echo '<h1>Hello World!</h1>';
});

//run Fat-free
$f3->run();
