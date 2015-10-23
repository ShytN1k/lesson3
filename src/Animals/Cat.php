<?php

namespace Animals;

class Cat implements AnimalsInterface
{
    use GeneralTrait;
    use SpeedTrait;

    private $breed;

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function printSpecial()
    {
        if ($this->getBreed()) {
            $str = "Special information! ";
            $str .= "Breed: ".$this->getBreed()."<br>";
            echo $str;
        }
    }
}