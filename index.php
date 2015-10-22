<?php

require_once('./vendor/autoload.php');

use Animals\Cat;
use Animals\Turtle;
use Animals\Hawk;
use Animals\Ostrich;

$cat = new Cat();
$cat->setWeight(10);
$cat->setSpeed(4);
$cat->setSound('Meu');

$turtle = new Turtle();
$turtle->setWeight(5);
$turtle->setSpeed(1);
$turtle->setSound('O-o-o-o-o!');

$hawk = new Hawk();
$hawk->setWeight(30);
$hawk->setSpeed(300);
$hawk->setSound('Piu-piu!');

$ostrich = new Ostrich();
$ostrich->setWeight(40);
$ostrich->setSpeed(300);
$ostrich->setSound('Ia-ia!');

$animals = array($cat, $ostrich, $hawk, $turtle);

foreach($animals as $animal){
    $animal->printInformation();
}
