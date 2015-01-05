<?php

namespace headcanon\QuickenCalc;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../lib/Calculator.php';

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $calculator;

    public function testCanAdd()
    {
        $result = $this->calculator->evaluate('2 + 3');

        $this->assertEquals('5', $result);
    }

    public function testCanSubtract()
    {
        $result = $this->calculator->evaluate('3 - 2');

        $this->assertEquals('1', $result);
    }

    public function testCanMultiply()
    {
        $result = $this->calculator->evaluate('2 * 3');

        $this->assertEquals('6', $result);
    }

    public function testCanDivide()
    {
        $result = $this->calculator->evaluate('8 / 2');

        $this->assertEquals('4', $result);
    }

    public function testCanHandleFloats()
    {
        $result = $this->calculator->evaluate('22.8 / 19.2');

        $this->assertEquals('1.1875', $result);
    }

    public function testCanHandleNegativeNumbers()
    {
        $result = $this->calculator->evaluate('23 - -19');

        $this->assertEquals('42', $result);
    }

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }
}
