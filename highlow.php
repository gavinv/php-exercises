<?php
if(is_numeric($argv[1]) && is_numeric($argv[2])) {
$magicNumber = mt_rand($argv[1], $argv[2]);
if($argc == 3) {
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
}
} else {
	echo "Arguments need to be numeric values! Try again" . PHP_EOL;
}
