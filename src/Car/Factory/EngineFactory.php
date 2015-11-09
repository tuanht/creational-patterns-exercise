<?php

namespace Car\Factory;

use Car\Engine\V6Engine;
use Car\Engine\V8Engine;

class EngineFactory implements FactoryInterface
{
    public static $ENGINE_V6 = 1;
    public static $ENGINE_V8 = 2;

    public static function create($type)
    {
        switch ($type) {
            case self::$ENGINE_V6:
                return new V6Engine();

            case self::$ENGINE_V8:
                return new V8Engine();

            default:
                return null;
        }
    }
}
