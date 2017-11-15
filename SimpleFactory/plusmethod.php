<?php

class Plusmethod extends AbstractMethod
{
	private $num1;
	private $num2;
	
	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function compute() {
		return $this->num1 + $this->num2;
	}
}