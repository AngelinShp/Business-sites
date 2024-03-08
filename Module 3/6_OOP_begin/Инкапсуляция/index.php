<?php
	class Car
	{
		private $name = '';
		public $color = '';

		public function start() {

			echo '1, 2, 3 … Start ' . $this->name . '!';
		}
		public function stop() {
			echo 'Stop!';
		}
		public function setName(string $name) {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}
	}


    $car1 = new Car();  
   //echo $car1->name;
    echo $car1->setName('Nissan');
	echo $car1->getName();
    $car1->start();
    $car1->stop();
?>

<?php
class Person {
	private $name = ''; //имя
	private $surname = ''; //фамилия
	private $midname = ''; //отчество
	private $city = ''; //город
	private $phone = ''; //телефон
	private $email = ''; //электронная почта
	private $address = ''; // адрес

	public function fullName() {
		return $this->surname . ' ' . $this->name . ' ' .  $this->midname;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setName($name) {
		$this->name = $name;
	}
	public function setSurname($surname) {
		$this->surname = $surname;
	}

	public function setMidname($midname) {
		$this->midname = $midname;
	}
}
$person = new Person();
echo $person->fullName(); // 2 пробела
$person->setName('Мария');
echo $person->fullName(); // Мария
$person->setSurname('Иванова');
echo $person->fullName(); // Иванова Мария
$person->setMidname('Сергеевна');
echo $person->fullName(); // Иванова Мария Сергеевна
?>
