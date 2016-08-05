<?php
require_once 'Rectangle.php';

class Square extends Rectangle {

	public function __construct($side) {
		parent::__construct($side, $side);
	}
	
	public function perimeter() {
		return ($this->getHeight() * 4);
	}

}