<?php

namespace Tests\Car;

use Car\Builder\BmwCarBuilder;
use Car\Builder\ToyotaCarBuilder;
use Car\Factory\EngineFactory;
use Car\Factory\TyreFactory;
use Car\Model\BmwCar;

class CarTest extends \PHPUnit_Framework_TestCase
{
    public function testToyotaCar()
    {
        $carBuilder = new ToyotaCarBuilder();
        $carBuilder
            ->createCar()
            ->addEngine(EngineFactory::create(EngineFactory::$ENGINE_V6))
            ->addTyre(TyreFactory::create(TyreFactory::$ENTRY_TYRE));

        $this->assertEquals('Toyota car are running', $carBuilder->getCar()->run());
    }

    public function testBmwCar()
    {
        $carBuilder = new BmwCarBuilder();
        $carBuilder
            ->createCar()
            ->addEngine(EngineFactory::create(EngineFactory::$ENGINE_V8))
            ->addTyre(TyreFactory::create(TyreFactory::$SPORT_TYRE));

        $this->assertEquals('Bmw car are running', $carBuilder->getCar()->run());
    }
}
