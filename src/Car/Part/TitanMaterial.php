<?php

namespace Car\Part;

use Car\Model\MaterialInterface;

abstract class TitanMaterial implements MaterialInterface
{

    /**
     * {@inheritdoc}
     */
    public function getHardLevel()
    {
        return 7.0;
    }
}
