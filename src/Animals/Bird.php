<?php

namespace Animals;

abstract class Bird implements AnimalsInterface
{
    use GeneralTrait;

    private $owner;

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function printSpecial()
    {
        if ($this->getOwner()) {
            $str = "Special information! ";
            $str .= "Owner: ".$this->getOwner()."<br>";
            echo $str;
        }
    }
}