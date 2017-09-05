<?php

class Calculator 
{
	function compute($method, $num1, $num2)
	{
		switch ($method) {
			case '+':
			return $num1 + $num2;
				break;
			case '-':
			return $num1 - $num2;
				break;
			case '*':
			return $num1 * $num2;
				break;
			case '/':
			return $num1 / $num2;
				break;
			case 'discount':
			return ($num1 + $num2) - 100;
				break;
			default:
			return 0;
				break;
		}
	}
}

?>