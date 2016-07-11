<?php

function humanizedList($array) {
	$lastItem = array_pop($array);
	$lastItemString = 'and ' . $lastItem;
	array_push($array, $lastItemString);
	$arrayToString = implode(', ', $array);
	return $arrayToString;
}
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistArray = explode(', ', $physicistsString);
$famousFakePhysicists = humanizedList($physicistArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;