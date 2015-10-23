<?php

namespace Animals;

class Turtle implements AnimalsInterface
{
    use GeneralTrait;
    use SpeedTrait;

    private $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function printSpecial()
    {
        if ($this->getAge()) {
            $str = "Special information! ";
            $str .= "Age: ".$this->getAge()."<br>";
            echo $str;
        }
    }
}