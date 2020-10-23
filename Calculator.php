<?php

use phpDocumentor\Reflection\Types\Integer;
use SebastianBergmann\Type\ObjectType;

class Calculator
{
    public static $num;  

    public static function init($n)
    {
        $n = new self;
        $n->num = $n;

        var_dump($n);

        return $n;
    }

    public function result()
    {
        
    }
}

