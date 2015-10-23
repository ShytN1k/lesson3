<?php

namespace Animals;

trait GeneralTrait
{
    private $weight;
    private $sound;
    private $name;

    /**
     * @param $name
     * @param $weight
     * @param $speed
     * @param $sound
     */
    public function __construct($name, $weight, $speed, $sound)
    {
        $this->setName($name);
        $this->setWeight($weight);
        $this->setSpeed($speed);
        $this->setSound($sound);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
        $str = "Name: ".$this->getName()."<br>";
        $str .= "Weight: ".$this->getWeight()."<br>";
        $str .= "Speed: ".$this->getSpeed()."<br>";
        $str .= "Sound: ".$this->getSound()."<br>";
        echo $str;
        $this->printSpecial();
        echo "<br>";
    }
}