<?php

use PHPUnit\Framework\TestCase;

require_once "Calculadora.php";

class CalculadoraTest extends TestCase
{
    public function test_inicializacao()
    {
        $this->assertSame(1,    Calculadora::inicia(1)->resultado());
        $this->assertSame(2,    Calculadora::inicia(2)->resultado());
        $this->assertSame(10,   Calculadora::inicia(10)->resultado());
        $this->assertSame(0,    Calculadora::inicia()->resultado());
    }

    public function test_soma_basica()
    {
        $this->assertSame(2,    Calculadora::inicia(1)->mais(1)->resultado());
        $this->assertSame(5,    Calculadora::inicia(2)->mais(3)->resultado());
        $this->assertSame(47,   Calculadora::inicia(10)->mais(37)->resultado());
        $this->assertSame(6,    Calculadora::inicia(3)->mais(3)->resultado());
        $this->assertSame(512,  Calculadora::inicia(256)->mais(256)->resultado());
        $this->assertSame(0,    Calculadora::inicia(0)->mais(0)->resultado());
    }

    public function test_soma_negativos()
    {
        $this->assertSame(-7,   Calculadora::inicia(7)->mais(-14)->resultado());
        $this->assertSame(-50,  Calculadora::inicia(100)->mais(-150)->resultado());
        $this->assertSame(-1,   Calculadora::inicia(0)->mais(-1)->resultado());
        $this->assertSame(-30,  Calculadora::inicia(-50)->mais(20)->resultado());
        $this->assertSame(42,   Calculadora::inicia(-18)->mais(60)->resultado());
        $this->assertSame(0,    Calculadora::inicia(-50)->mais(50)->resultado());
    }
}
