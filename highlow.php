<?php
if(is_numeric($argv[1]) && is_numeric($argv[2])) {
	$magicNumber = mt_rand($argv[1], $argv[2]);
	if($argc == 3) {
		do {
			fwrite(STDOUT, 'Guess? ');
			$guess = fgets(STDIN);

			if ($guess > $magicNumber) {
				$message =  'LOWER';
			} elseif ($guess < $magicNumber) {
				$message = 'HIGHER';
			} else {
				$message = 'GOOD GUESS';
			}

			fwrite(STDOUT, $message . PHP_EOL);
		} while ($guess != $magicNumber);
	}
} else {
	echo "Arguments need to be numeric values! Try again" . PHP_EOL;
}
