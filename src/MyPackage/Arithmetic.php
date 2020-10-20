<?php

namespace yusukeono\composerstudy;

class Arithmetic
{
    /**
     * 足し算
     */
    public function add($x, $y)
    {
        return($x + $y);
    }

    /**
     * 引き算
     */
    public function subtract($x, $y)
    {
        return($x - $y);
    }

    /**
     * 掛け算
     */
    public function multiply($x, $y)
    {
        return($x * $y);
    }

    /**
     * 割り算
     */
    public function divide($x, $y)
    {
        return($x / $y);
    }
}
