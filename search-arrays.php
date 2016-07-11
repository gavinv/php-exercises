<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function findArray($array, $value) {
	if(array_search($value, $array) !== false) {
		return true;
	} else {
		return false;
	}
}
function compareArrays($array1, $array2) {
	$counter = 0;
	foreach($array1 as $value) {
		if(findArray($array2, $value)) {
			$counter++;
		}
	}
	return $counter;
}

var_dump(findArray($names, 'Greg')) . PHP_EOL;
echo compareArrays($names, $compare) . PHP_EOL;