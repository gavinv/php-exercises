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

echo findArray($names, 'Greg') . PHP_EOL;