<?php

$morningArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];
$numberArray = [1, 5, 10, 100, 9, 6, 2, 0];

function manualSort($array) {
	for($i = 0; $i < count($array); $i++) {
		for($j = 0; $j < count($array)-1; $j++) {
			if($array[$j] > $array[$j+1]) {
				$temp = $array[$j+1];
				$array[$j+1]=$array[$j];
				$array[$j]=$temp;
			}
		}
	}
	return $array;
}

print_r(manualSort($morningArray));
