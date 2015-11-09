<?php

namespace Car\Builder;

use Car\Model\ToyotaCar;

class ToyotaCarBuilder extends CarBuilder
{

    public function createCar()
    {
        $this->car = new ToyotaCar();
        return $this;
    }
}
