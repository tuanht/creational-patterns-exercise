<?php

namespace Car\Builder;

use Car\Model\BmwCar;

class BmwCarBuilder extends CarBuilder
{

    public function createCar()
    {
        $this->car = new BmwCar();
        return $this;
    }
}
