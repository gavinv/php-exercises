<?php
//problem 1

$numberStrings = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
fwrite(STDOUT, '-Problem One-' . PHP_EOL . 'Enter a number: ');
$numberInput = trim(fgets(STDIN));
function convertNumber($number, $array)
{
	foreach($array as $index => $string)
	{
		if($number == ($index + 1)) 
		{
			echo $string;
		}
	}
}
if(strlen($numberInput) == 1)
{
	echo convertNumber($numberInput, $numberStrings) . PHP_EOL;
} else {
	echo 'Please enter a number from 1-9' . PHP_EOL;
}

//problem 2

fwrite(STDOUT, PHP_EOL . '-Problem Two-' . PHP_EOL . 'Enter a number: ');
$integerOne = trim(fgets(STDIN));
fwrite(STDOUT, 'Enter another number: ');
$integerTwo = trim(fgets(STDIN));

function greatestCommonDivisor($num1, $num2)
{
	while($num2 !== 0) {
		$modulus = $num1 % $num2;
		$num1 = $num2;
		$num2 = $modulus;
	}
	return $num1;
}
echo greatestCommonDivisor($integerOne, $integerTwo) . PHP_EOL;

