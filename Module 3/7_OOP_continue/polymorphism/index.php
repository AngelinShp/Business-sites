<?php

	function myPrint($str) {
		echo $str . ' ';
	}
	myPrint('Meow');
	myPrint(1);
	myPrint(2.34);

?>


<?php
	class Animal 
	{
		protected $roar = 'Rrr'; // рык
		public function bark() {
			echo ' ' . $this->roar;
		}
	}
	class Cat extends Animal 
	{
		protected $roar = 'Meow';
		public function bark()
		{
			echo ' ' . '(˃ᆺ˂)';
		}
	}

	class Dog extends Animal
	{
		protected $roar = 'Guau';
		public function bark()
		{
			echo parent::bark() . ', because I am dog  U・ᴥ・U';
		}
	}

	//$animal = new Animal();
	//$animal->bark(); // Rrr

	//$cat = new Cat();
	//$cat->bark(); // Meow

	//$dog = new Dog();
	//$dog->bark(); // Guau

	$animals = [
		new Animal(),
		new Cat(),
		new Dog()
	];

	foreach($animals as $animal) {
		$animal->bark();
	}
?>
