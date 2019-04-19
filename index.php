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

//Define a default root
$f3->route('GET /', function()
{
    echo '<h1>My Pets</h1>';
    echo '<a href="order">Order a Pet</a>';

});

//create route that accepts an animal type

$f3->route('GET /@animalType', function($f3, $params){
    $animalType = $params['animalType'];

    switch($animalType){
        case 'cat':
            echo "<h3>Meow!</h3>";
            break;
        case 'dog':
            echo "<h3>Woof!</h3>";
            break;
        case 'chicken':
            echo "<h3>Cluck!</h3>";
            break;
        case 'panda':
            echo "<h3>braaahhh</h3>";
            break;
        case 'koala':
            echo "<h3>Mreaaah</h3>";
            break;
        default:
            $f3 ->error(404);

    }

});

//run Fat-free
$f3->run();
