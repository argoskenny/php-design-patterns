<?php
class CalculatorSimpleFactory 
{
    public static function selectMethod($method, $num1, $num2) {
        switch ($method) {
            case '+':
                return new Plusmethod($num1, $num2);
                break;
            case '-':
                return new Minusmethod($num1, $num2);
                break;
            case '*':
                return new Multiplymethod($num1, $num2);
                break;
            default:
                return 0;
                break;
        }
    }
}