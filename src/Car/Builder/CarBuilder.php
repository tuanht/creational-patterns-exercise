<?php

namespace Car\Builder;

use Car\Model\Car;

abstract class CarBuilder
{
    /**
     * @var Car
     */
    protected $car;

    public function getCar()
    {
        return $this->car;
    }

    public function addTyre($tyre)
    {
        $this->car->setTypes([$tyre]);
        return $this;
    }

    public function addEngine($engine)
    {
        $this->car->setEngine($engine);
        return $this;
    }

    public function addClock($clock)
    {
        $this->car->setClock($clock);
        return $this;
    }

    public abstract function createCar();
}
