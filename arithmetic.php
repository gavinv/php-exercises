<?php
function add($a, $b)
{
	return $a + $b;
}
function subtract($a, $b)
{
	return $a - $b;
}
function multiply($a, $b)
{
	return $a * $b;
}
function divide($a, $b)
{
	return $a / $b;
}
function modulus($a, $b)
{
	return $a % $b;
}
echo '5 + 4 = ' . add(5, 4) . PHP_EOL;
echo '37 - 15 = ' . subtract(37, 15) . PHP_EOL;
echo '12 * 95 = ' . multiply(12, 95) . PHP_EOL;
echo '27 / 19 = ' . divide(27, 19) . PHP_EOL;
echo '57 % 12 = ' . modulus(57, 12) . PHP_EOL;