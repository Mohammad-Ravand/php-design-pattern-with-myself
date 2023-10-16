<?php
namespace App;
require_once('./vendor/autoload.php');

//create home builder 
$homeBuilder = new HomeBuilder();

//create classic home
$classic_home = new ClassicHome();

$homeDirector = new HomeDecorator($homeBuilder);


$homeTypeOne = $homeDirector->createHomeTypeOne();
$homeTypeTwo = $homeDirector->createHomeTypeTwo();

print_r($homeTypeOne);


// print_r($classic_home->getProduct());

