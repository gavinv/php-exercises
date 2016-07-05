<?php
fwrite(STDOUT, 'Gimme a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Gimme an ending number: ');
$endingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Choose increment: ');
$increment = trim(fgets(STDIN));
for($i = $startNumber; $i <= $endingNumber; $i += $increment) {
	echo $i . PHP_EOL;
}