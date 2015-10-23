<?php

namespace Animals;

interface AnimalsInterface
{
    public function getWeight();

    public function getSpeed();

    public function getSound();

    public function setWeight($weight);

    public function setSpeed($speed);

    public function setSound($sound);

    public function printInformation();

    public function printSpecial();

}