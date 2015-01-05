<?php

namespace headcanon\QuickenCalc;

/**
 * Class Calculator
 * @package headcanon\QuickenCalc
 */
class Calculator
{

    /**
     * Evaluates an expression string
     * @param $expr - the expression to evaluate
     * @return string - the result of the expression
     * @throws \Exception if expression is invalid
     */
    public function evaluate($expr)
    {
        $_number = '(?>-)?[[:digit:]]+(?>\.[[:digit:]]+)?';
        $_ws = '[[:blank:]]*';
        $_binary_operator = '\+|\-|\/|\*';
        $_binary_expr = "/($_number)$_ws($_binary_operator)$_ws($_number)/";

        if (preg_match($_binary_expr, $expr, $match)) {

            $result = $this->evaluateBinaryExpression($match[2], $match[1], $match[3]);
            return "$result";
        }

        throw new \Exception("Invalid expression.");
    }

    /**
     * Returns the result of a binary arithemtic expression
     * @param $op - one of '+', '-', '*', '/'
     * @param $first - a numeric argument
     * @param $second - a numeric argument
     * @return float - the result of the expression
     * @throws \Exception if $op is not a valid operator
     */
    private function evaluateBinaryExpression($op, $first, $second)
    {
        $firstFloat = floatval($first);
        $secondFloat = floatval($second);

        switch ($op) {
            case '+' :
                return $firstFloat + $secondFloat;
            case '-' :
                return $firstFloat - $secondFloat;
            case '*' :
                return $firstFloat * $secondFloat;
            case '/' :
                return $firstFloat / $secondFloat;
            default:
                throw new \Exception("Invalid character for binary operator (accepts +, -, *, /)");
        }
    }
}
