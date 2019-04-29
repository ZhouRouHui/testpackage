<?php

class TestPackage {
	public $name = 'zhang san';
	public $age = 18;

	function __construct (string $name = '', int $age = 0) 
	{
		if (!empyt($name)) {
			$this->name = $name;
		}
		if ($age > 0) {
			$this->age = $age;
		}
	}

	function getInfo () {
		echo "my name is {$this->name}, i am {$this->age}";
	}
}