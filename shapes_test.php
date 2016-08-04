<?php
require_once 'Square.php';

$rectangleOne = new Rectangle(3, 4);
$rectangleTwo = new Rectangle(10, 17);
$rectangleThree = new Rectangle(6, 16);

echo $rectangleOne->area() . PHP_EOL;
echo $rectangleTwo->area() . PHP_EOL;
echo $rectangleThree->area() . PHP_EOL;

$squareOne = new Square(5, 5);
echo $squareOne->perimeter() . PHP_EOL;
echo $squareOne->area() . PHP_EOL;