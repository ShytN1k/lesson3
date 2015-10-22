<?php

namespace Animals;

class Turtle implements AnimalsInterface
{
    use GeneralFunctions;
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
}