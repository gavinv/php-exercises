<?php
$magicNumber = mt_rand(1, 100);
do {
fwrite(STDOUT, 'Guess? ');
$guess = fgets(STDIN);
if ($guess > $magicNumber) {
	fwrite(STDOUT, 'LOWER' . PHP_EOL);
} elseif ($guess < $magicNumber) {
	fwrite(STDOUT, 'HIGHER' . PHP_EOL);
} else {
	fwrite(STDOUT, 'GOOD GUESS' . PHP_EOL);
}
} while ($guess != $magicNumber);
