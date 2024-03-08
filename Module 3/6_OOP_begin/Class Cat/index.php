<?php
    class Cat
    {
        public $color = 'Orange';
        public $height = '27 см';
        public $lenght = '46 см';
        public $weight = '4 кг';

        public function playing() {
            echo 'Ура, клубок!';
        }
        public function sleep() {
            echo 'Пойду посплю.';
        }
        public function eat() {
            echo 'Ммм, молочко!';
        }
        public function purring() {
            echo 'Мур-мур...';
        }
    }

    $garfieild = new Cat();
    
    $garfieild->sleep();
    $garfieild->purring();

?>