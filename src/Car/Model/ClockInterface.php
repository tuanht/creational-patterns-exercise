<?php

namespace Car\Model;

interface ClockInterface
{
    /**
     * @return integer
     */
    public function getCurrentOdo();

    /**
     * @param integer $value
     * @return $this
     */
    public function increaseOdo($value);
}
