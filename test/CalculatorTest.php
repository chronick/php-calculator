<?php

namespace headcanon\QuickenCalc;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../lib/Calculator.php';

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    protected $calculator;

    /**
     * Can the calculator perform a basic add?
     */
    public function testCanAdd()
    {
        $result = $this->calculator->evaluate('2 + 3');

        $this->assertEquals('5', $result);
    }

    /**
     * Can the calculator perform a basic subtract?
     */
    public function testCanSubtract()
    {
        $result = $this->calculator->evaluate('3 - 2');

        $this->assertEquals('1', $result);
    }

    /**
     * Can the calculator perform a basic multiply?
     */
    public function testCanMultiply()
    {
        $result = $this->calculator->evaluate('2 * 3');

        $this->assertEquals('6', $result);
    }

    /**
     * Can the calculator perform a basic divide?
     */
    public function testCanDivide()
    {
        $result = $this->calculator->evaluate('8 / 2');

        $this->assertEquals('4', $result);
    }

    /**
     * Can the calculator handle decimal numbers?
     */
    public function testCanHandleFloats()
    {
        $result = $this->calculator->evaluate('22.8 / 19.2');

        $this->assertEquals('1.1875', $result);
    }

    /**
     * Can the calculator handle expressions with negative numbers?
     */
    public function testCanEvaluateExpressionsWithNegativeNumbers()
    {
        $result = $this->calculator->evaluate('23 - -19');

        $this->assertEquals('42', $result);
    }

    /**
     * The calculator should not accept the modulus, or any other binary operator.
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid expression.
     */
    public function testExceptionOnInvalidOperators() {

        $this->calculator->evaluate('23 % 5');
    }

    /**
     * The calculator should not handle expressions with multiple binary operators.
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid expression.
     */
    public function testExceptionOnMultipleOperators() {

        $this->calculator->evaluate('23 + 5 - 3');
    }

    /**
     * The calculator should not handle expressions with non-numeric operands.
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid expression.
     */
    public function testExceptionOnNonNumericExpression()
    {
        $this->calculator->evaluate("2 + x");
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
