<?php

namespace Car\Part;

use Car\Model\Material;

abstract class SteelMaterial extends Material
{
    protected static $INIT_HARD_LEVEL = 20000;

    public function _construct()
    {
        parent::_construct(static::$INIT_HARD_LEVEL);
    }
}
