<?php
$a = 2;
$b = 10;
function add($a, $b)
{
	if(is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		return "ERROR: Both arguments must be numbers \n";
	}
}
function subtract($a, $b)
{
	if(is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
		return "ERROR: Both arguments must be numbers \n";
	}
}
function multiply($a, $b)
{
	if(is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
		return "ERROR: Both arguments must be numbers \n";
	}
}
function divide($a, $b)
{
	if(is_numeric($a) && is_numeric($b) && $b != 0) {
		return $a / $b;
	} elseif($b === 0) {
		return "ERROR: Second argument cannot be 0 / cannot divide by 0" . PHP_EOL;
	} else {
		return "ERROR: Both arguments must be numbers \n";
}
function modulus($a, $b)
{
	if(is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return "ERROR: Both arguments must be numbers \n";
	}
}
echo '5 + 4 = ' . add('a', 4) . PHP_EOL;
echo '37 - 15 = ' . subtract(37, 15) . PHP_EOL;
echo '12 * 95 = ' . multiply(12, 95) . PHP_EOL;
echo '27 / 0 = ' . divide(27, 0) . PHP_EOL;
echo '57 % 12 = ' . modulus(57, 12) . PHP_EOL;

//make a square function
//make a function called sum of squares using only above functions