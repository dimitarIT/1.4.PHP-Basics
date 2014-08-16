<?php
$firstNumber = 1.567808;
$secondNumber = 0.356;
$result = number_format($firstNumber + $secondNumber, 2);
$print = '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = " . $result;

echo($print);
?>