<?php
require_once 'Rectangle.php';

$rectangleOne = new Rectangle(3, 4);
$rectangleTwo = new Rectangle(10, 17);
$rectangleThree = new Rectangle(6, 16);

echo $rectangleOne->area() . PHP_EOL;
echo $rectangleTwo->area() . PHP_EOL;
echo $rectangleThree->area() . PHP_EOL;