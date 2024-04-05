<?php
/*
	class MyClass {
		private $_test = 'privet mir';

		public function getTest() {
			return $this->_test;
		}

		public function setTest($test) {
			$this->_test = $test;
			echo $test;
		}

	}
	$obj = new MyClass();
	$obj->getTest();
	$obj->setTest('new');
*/

/*
	class MyClass {
		private $_test = 'privet mir';
		
		public function __get($property) {
			switch($property) {
				case 'test':
					return $this->_test;
					break;
				default:
					echo 'Переменная для вывода не найдена' . PHP_EOL;
					break;
			}
		}

		public function __set($property, $value) {
			switch($property) {
				case 'test':
					$this->_test = $value;
					break;
				default:
					echo 'Переменная для назначения не найдена' . PHP_EOL;
					break;
			}
		}
	}
	$obj = new MyClass();
	echo $obj->test . PHP_EOL;
	$obj->test = 'new';
	echo $obj->test . PHP_EOL;

	*/
	/*
	class MyClass {
		private $_test = 'privet mir';
		
		public function __get($property) {
			switch($property) {
				case 'test':
					return $this->getTest();
					//return $this->_test;
					break;
				default:
					echo 'Переменная для вывода не найдена' . PHP_EOL;
					break;
			}
		}

		public function __set($property, $value) {
			switch($property) {
				case 'test':
					$this->setTest($value);
					//$this->_test = $value;
					break;
				default:
					echo 'Переменная для назначения не найдена' . PHP_EOL;
					break;
			}
		}

		public function getTest() {
			return $this->_test;
		}
	
		public function setTest($test) {
			$this->_test = $test;
		}
	
	}
	$obj = new MyClass();
	echo $obj->test . PHP_EOL;
	$obj->test = 'new';
	echo $obj->test . PHP_EOL;
*/


	class MyClass {
		private $_test = 'privet mir';
	
		public function __get($property) {
			$getter = 'get' . ucfirst($property); //'getTest'
			if(method_exists($this, $getter)) {
				return $this->$getter();
			} else {
				echo 'Свойство для вывода не найдено'; 
			}
		}
	
		public function __set($property, $value) {
			$setter = 'set' . ucfirst($property);
			if(method_exists($this, $setter)) {
				$this->$setter($value);
			} else {
				echo 'Свойство для назначения не найдено'; 
			}
		}
		public function getTest() {
			return $this->_test;
		}
	
		public function setTest($test) {
			$this->_test = $test;
		}
	
	}

	$obj = new MyClass();
	echo $obj->test . PHP_EOL;
	$obj->test = 'new';
	echo $obj->test . PHP_EOL;

?>


