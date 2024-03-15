<?php


interface Bark {
	public function bark();
}

class Animal implements Bark {
	public function __construct($roar) {
		$this->roar = $roar;
	}

	public function bark() {
		echo ' ' . $this->roar;
	}
}

class Cat extends Animal {
	public function __construct() {
		parent::__construct('Meow');
	}
}

$animals = [
	new Animal('Rrrr!'),
	new Cat(),
];

foreach($animals as $animal) {
	$animal->bark();
}


/*
interface Bark {
	public function bark();
}

interface Bark2 {
	public function bark();
	public function bark2();
}

class Animal implements Bark, Bark2 {
	public function __construct($roar) {
		$this->roar = $roar;
	}
		// нет конфликта
	public function bark() {
		echo ' ' . $this->roar;
	}
	public function bark2() {
		//мы обязаны хотя бы объявить bark2
	}

}
*/
/*
interface Bark {
	public function bark();
}

interface Bark2 {
	const ROAR = 'RRRRR';
	public function bark();
	public function bark2();
}

class Animal implements Bark{
	public function __construct($roar) {
		$this->roar = $roar;
	}

	public function bark() {
		echo ' ' . $this->roar;
	}
	public function bark2() {
		// просто объявляем, чтобы не нарушить «контракт»
	}

}
class Cat extends Animal implements Bark2{
	public function __construct() {
		parent::__construct('Meow');
	}
	public function bark2() {
		echo ' ' .  Bark2::ROAR;
	}
	...
}

	$animals = [
	new Animal('R-r-r'),
		new Cat(),
	];

	foreach($animals as $animal) {
		$animal->bark();
		$animal->bark2();
	}
//$animal = new Animal('R-r-r');
//$animal->bark();

//$cat = new Cat();
//$cat->bark();
//$cat->bark2();

?>
*/