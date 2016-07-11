<?php

function humanized_list($array, $alphabetize = false) {
	if($alphabetize) {
		sort($array);
	}
	$lastItem = array_pop($array);
	$lastItemString = 'and ' . $lastItem;
	array_push($array, $lastItemString);
	$arrayToString = implode(', ', $array);
	return $arrayToString;
}
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistArray = explode(', ', $physicistsString);
$famousFakePhysicists = humanized_list($physicistArray, true);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;