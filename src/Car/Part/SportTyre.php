<?php

namespace Car\Part;

use Car\Model\TyreInterface;

class SportTyre extends TitanMaterial implements TyreInterface
{

    /**
     * {@inheritdoc}
     */
    public function getRadius()
    {
        return 17;
    }
}
