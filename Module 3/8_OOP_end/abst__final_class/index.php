<?php

use Cat as GlobalCat;

abstract class Animal 
{
	abstract public function bark(); // реализуем в классе-наследнике
}
final class Cat extends Animal 
{
	private $roar = 'Meow';
	public function bark() {
		echo ' ' . $this->roar;
	}
}
class Dog extends Animal 
{
	private $roar = 'Guau';
	final public function bark() {
		echo ' ' . $this->roar;
	}
}
class Kitty extends Cat
{
	private $roar = 'Meeeooow';
	public function bark() {
		echo ' ' . $this->roar;
	}
}

class Puppy extends Dog
{
	private $roar = 'Meeeooow';
	public function bark() {
		echo ' ' . $this->roar;
	}
}

$animals = [
	//new Animal(), // вызовет ошибку
	new Cat(),
	new Dog()
];

foreach($animals as $animal) {
	$animal->bark();
}
?>


