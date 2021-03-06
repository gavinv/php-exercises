<?php

class Rectangle {

	private $height;
	private $width;

	public function __construct($height, $width) {
		$this->height = $height;
		$this->width = $width;
	}
	public function getHeight()
	{
		return $this->height;
	}
	public function getWidth()
	{
		return $this->width;
	}
	public function area() {
		return ($this->getHeight() * $this->getWidth());
	}
}