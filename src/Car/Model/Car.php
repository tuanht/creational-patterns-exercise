<?php

namespace Car\Model;

abstract class Car
{
    /**
     * @var array
     */
    protected $types;

    /**
     * @var \Car\Model\EngineInterface
     */
    protected $engine;

    /**
     * @var \Car\Model\ClockInterface
     */
    protected $clock;

    /**
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param array $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return EngineInterface
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param EngineInterface $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return ClockInterface
     */
    public function getClock()
    {
        return $this->clock;
    }

    /**
     * @param ClockInterface $clock
     */
    public function setClock($clock)
    {
        $this->clock = $clock;
    }

    /**
     * @param integer $kilometer
     * @return mixed
     */
    public abstract function run($kilometer);
}
