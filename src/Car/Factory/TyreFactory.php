<?php

namespace Car\Factory;

use Car\Part\EntryTyre;
use Car\Part\SportTyre;

class TyreFactory implements FactoryInterface
{
    public static $ENTRY_TYRE = 1;
    public static $SPORT_TYRE = 2;

    public static function create($type)
    {
        switch ($type) {
            case self::$ENTRY_TYRE:
                return new EntryTyre();

            case self::$SPORT_TYRE:
                return new SportTyre();

            default:
                return null;
        }
    }
}
