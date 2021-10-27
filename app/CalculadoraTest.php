<?php
require_once(__DIR__.'/Calculadora.php');
use \PHPUnit\Framework\TestCase;
class calculadoraTest extends TestCase{
    public function testSumar(){
        $calculadora = new calculadora();
        $resultado_calculado = $calculadora->sumar(3,3);
        $this->assertEquals(6, $resultado_calculado);
    }
}