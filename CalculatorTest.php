<?php

use PHPUnit\Framework\TestCase;
use SebastianBergmann\Complexity\Calculator;

require_once "Calculator.php";

class CalculatorTest extends TestCase
{
    public function test_instance_initialization()
    {
        $calculator = new Calculator(1);
        $this->assertSame(1,    $calculator->result());
        
        $calculator2 = new Calculator(2);
        $this->assertSame(2,    $calculator2->result());
        
        $calculator3 = new Calculator(10);
        $this->assertSame(10,    $calculator3->result());
    }
    
    public function test_initialization()
    {
        $this->assertSame(1,    Calculator::init(1)->result());
        $this->assertSame(2,    Calculator::init(2)->result());
        $this->assertSame(10,   Calculator::init(10)->result());
        $this->assertSame(0,    Calculator::init()->result());
    }

    public function test_basic_sum()
    {
        $this->assertSame(2,    Calculator::init(1)->plus(1)->result());
        $this->assertSame(5,    Calculator::init(2)->plus(3)->result());
        $this->assertSame(47,   Calculator::init(10)->plus(37)->result());
        $this->assertSame(6,    Calculator::init(3)->plus(3)->result());
        $this->assertSame(512,  Calculator::init(256)->plus(256)->result());
        $this->assertSame(0,    Calculator::init(0)->plus(0)->result());
    }

    public function test_negative_sum()
    {
        $this->assertSame(-7,   Calculator::init(7)->plus(-14)->result());
        $this->assertSame(-50,  Calculator::init(100)->plus(-150)->result());
        $this->assertSame(-1,   Calculator::init(0)->plus(-1)->result());
        $this->assertSame(-30,  Calculator::init(-50)->plus(20)->result());
        $this->assertSame(42,   Calculator::init(-18)->plus(60)->result());
        $this->assertSame(0,    Calculator::init(-50)->plus(50)->result());
    }

    public function test_basic_subtraction()
    {
        $this->assertSame(5,   Calculator::init(10)->minus(5));
        $this->assertSame(0,   Calculator::init(1)->minus(1));
        $this->assertSame(27,  Calculator::init(64)->minus(37));
        $this->assertSame(-25, Calculator::init(18)->minus(43));
        $this->assertSame(100, Calculator::init(999)->minus(899));
        $this->assertSame(0,   Calculator::init(0)->minus(0));
    }
}
