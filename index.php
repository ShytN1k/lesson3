<?php

require_once('./vendor/autoload.php');

use Animals\Cat;
use Animals\Turtle;
use Animals\Hawk;
use Animals\Ostrich;

$cat = new Cat('Felix', 10, 4, 'Meu');
$cat->setBreed('Siamese');

$turtle = new Turtle('Panzi', 5, 1, 'O-o-o-o-o!');
$turtle->setAge(61);

$hawk = new Hawk('Eye', 30, 300, 'Piu-piu!');
$hawk->setOwner('Albert');

$ostrich = new Ostrich('Road Runner', 40, 100, 'Beep-beep!');
$ostrich->setOwner('Wile E. Coyote');


$animals = array($cat, $turtle, $hawk, $ostrich);

for ($i = 0; $i < 5; $i++) {
    switch (rand(0, 3)) {
        case 0:
            $newAnimal = new Cat('Some cat', rand(5, 15), rand(2, 6), 'I am a cat!');
            array_push($animals, $newAnimal);
            break;
        case 1:
            $newAnimal = new Turtle('Some turtle', rand(1, 5), rand(1, 4), 'I am a turtle!');
            array_push($animals, $newAnimal);
            break;
        case 2:
            $newAnimal = new Hawk('Some cat', rand(15, 25), rand(160, 300), 'I am a hawk!');
            array_push($animals, $newAnimal);
            break;
        case 3:
            $newAnimal = new Ostrich('Some ostrich', rand(35, 55), rand(40, 80), 'I am an ostrich!');
            array_push($animals, $newAnimal);
            break;
    }
}

foreach ($animals as $animal) {
    $animal->printInformation();
}