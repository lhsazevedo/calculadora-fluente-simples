<?php

use phpDocumentor\Reflection\Types\Integer;
use SebastianBergmann\Type\ObjectType;

class Calculator
{
    public $num;  

    public function __construct($num)
    {   
        $this->num = $num;
    }

    public static function init($num = 0)
    {
        return new self($num);
    }

    public function plus($num)
    {
        $this->num += $num;

        return $this;
    }

    public function minus($num)
    {
        $this->num -= $num;

        return $this;
    }

    public function result()
    {
        return $this->num;
    }
}

