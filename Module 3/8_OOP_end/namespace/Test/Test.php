<?php

	namespace Test;
	
	class Test {
		private $_test = 'private';
	
		public function __get($property) {
			$getter = 'get' . ucfirst($property);
			if(method_exists($this, $getter)) {
				return $this->$getter();
			} else {
				echo 'Not found';
			}
		}
	
		public function __set($property, $value) {
			$setter = 'set' . ucfirst($property);
			if(method_exists($this, $setter)) {
				$this->$setter($value);
			} else {
				echo 'Not found';
			}
		}
	
		public function getTest() {
			return $this->_test;
		}
		public function setTest($value) {
			$this->_test = $value;
		}
	}
	


?>