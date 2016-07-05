<?php
fwrite(STDOUT, 'Gimme a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Gimme an ending number: ');
$endingNumber = trim(fgets(STDIN));
for($i = $startNumber; $i <= $endingNumber; $i++) {
	echo $i . PHP_EOL;
}