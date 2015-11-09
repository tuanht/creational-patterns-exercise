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
     * @return mixed
     */
    public abstract function run();
}
