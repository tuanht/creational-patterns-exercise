<?php

namespace Car\Part;

use Car\Model\Material;

abstract class TitanMaterial extends Material
{
    protected static $INIT_HARD_LEVEL = 100000;

    public function _construct()
    {
        parent::_construct(static::$INIT_HARD_LEVEL);
    }
}
