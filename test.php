<?php

echo 'Welcome to Codeup!' . PHP_EOL;
echo 'This is my first PHP script!' . PHP_EOL;

$count = 2;
for ($i=0; $i < 2; $i++) {
	for ($j=0; $j < 2; $j++) {
		echo $i . $j . PHP_EOL;
		if ($j == 1) {
			break $count;
		}
	}
}