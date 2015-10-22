<?php

namespace Animals;

class Ostrich extends Bird
{
    private $speed;

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {

        if ($speed>=70){
            $this->speed = 70;
        } else {
            $this->speed = $speed;
        }

    }
}