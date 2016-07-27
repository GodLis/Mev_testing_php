<?php

namespace GodLis\Task8;

/**
 * Class MathExp
 * @package GodLis
 */
class MathExp
{
    /**
     * @var
     */
    protected $str;

    /**
     * MathExp constructor.
     * @param $str
     */
    public function __construct($str)
    {
        $this->str = $str;
    }

    public function __destruct()
    {
        $this->str;
    }

    /**
     * @return bool|float
     */
    public function mathExp()
    {
        if ((float)preg_replace('/([0-9\(\)\*\-\+\/\.]*)/', '\\1', $this->str) != 0) {
            $str = (float)preg_replace('/([0-9\(\)\*\-\+\/\.]*)/', '\\1', $this->str);
            return $str;
        }
        return false;
    }
}
