<?php

include 'calculator.php';
include 'calculatorSimpleFactory.php';

echo "計算機 使用一般 Class：<br>";
$calculator = new Calculator();
echo "100 * 10 = ".$calculator->compute("*", 100, 10);

echo "<br>===================<br>";

echo "計算機 使用一般 Simple Factory：<br>";
$newCalculator = CalculatorSimpleFactory::selectMethod("*", 100, 10);
echo "100 * 10 = ".$newCalculator->compute();

?>