<?php

namespace Animals;

trait GeneralFunctions
{
    private $weight;
    private $sound;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param mixed $sound
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    public function printInformation()
    {
        $str = 'Weight: ' . $this->getWeight() . "<br>";
        $str .= 'Speed: ' . $this->getSpeed() . "<br>";
        $str .= 'Sound: ' . $this->getSound() . "<br>";
        echo $str;
    }
}