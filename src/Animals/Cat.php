<?php

namespace Animals;

class Cat implements AnimalsInterface
{
    use GeneralFunctions;
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
}