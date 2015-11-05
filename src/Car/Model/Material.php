<?php

namespace Car\Model;

abstract class Material
{
    /**
     * @var integer
     */
    protected $hardLevel;

    /**
     * @param integer $initHardLevel
     */
    public function _construct($initHardLevel)
    {
        $this->hardLevel= $initHardLevel;
    }

    /**
     * @return integer
     */
    public function getHardLevel()
    {

    }
}
