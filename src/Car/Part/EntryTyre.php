<?php

namespace Car\Part;

use Car\Model\TyreInterface;

class EntryTyre extends SteelMaterial implements TyreInterface
{

    /**
     * {@inheritdoc}
     */
    public function getRadius()
    {
        return 16;
    }
}
