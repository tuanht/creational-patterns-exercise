<?php

namespace Car\Part;

use Car\Model\MaterialInterface;

abstract class SteelMaterial implements MaterialInterface
{

    /**
     * {@inheritdoc}
     */
    public function getHardLevel()
    {
        return 3.0;
    }
}
