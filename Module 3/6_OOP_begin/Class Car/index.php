<?php
	class Car
	{
	    //свойства
		public $name = 'Nissan';
		public $color = 'red';


        //методы
		public function start() {
			echo "\n1, 2, 3 … Start!";
		}
		public function stop() {
			echo "\nStop!";
		}
	}

    $car1 = new Car();  //создание объекта - экземпляра класса
    echo $car1->name; //выведется имя машины
    $car1->start(); //вызов метода start()
    $car1->stop(); //вызов метода stop()
?>
