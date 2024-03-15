<?php
class Animal 
{
    protected $wool;
	protected $roar = 'Rrr'; // рык

	public function bark() {
		echo ' ' . $this->roar;
	}
}


class Cat extends Animal
{
	protected $roar = 'Meow';
}

class Dog extends Animal
{
	protected $roar = 'Guau';
}

$animal = new Animal();
$animal->bark();

$cat = new Cat();
$cat->bark();
$dog = new Dog();
$dog->bark();
?>
