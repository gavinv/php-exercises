<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function find_array($array, $value) {
	if(array_search($value, $array) !== false) {
		return true;
	} else {
		return false;
	}
}
function compare_arrays($array1, $array2) {
	$counter = 0;
	foreach($array1 as $value) {
		if(find_array($array2, $value)) {
			$counter++;
		}
	}
	return $counter;
}
function combine_arrays($array1, $array2) {
	
}

var_dump(find_array($names, 'Greg')) . PHP_EOL;
echo compare_arrays($names, $compare) . PHP_EOL;