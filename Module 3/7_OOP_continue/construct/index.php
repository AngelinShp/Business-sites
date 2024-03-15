<?php
class Animal1 {
	private $roar; // рык

	public function __construct($roar) {
		$this->roar = $roar;
	}

	public function bark() {
		echo ' ' . $this->roar;
	}
}
$animal = new Animal1();
$animal->bark();
?>



<?php
	class Animal {
		private $roar; // рык
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

	class Dog extends Animal {
		public function __construct() {
			parent::__construct('Guau');
		}
	}











// // Задание 2
// 	class Monkey extends Animal {
// 		private $food;
// 		public function __construct($roar, $food) {
// 			parent::__construct($roar);
// 			$this->food = $food;
// 		}
// 		public function bark() {
// 			echo ' ' . $this->roar . $this->food;
// 		}
// 	}
//
// $animals = [
// 	new Animal('Rrrr!'),
// 	new Cat(),
// 	new Dog(),
// //	new Monkey('Лол, кек, ','чебурек' )
// ];
//
// foreach($animals as $animal) {
// 	$animal->bark();
// }
// ?>
