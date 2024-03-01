/* https://drive.google.com/file/d/1B4vbRI4nFwp3vn15pMK3Ut1d-QcZ5xdv/view
https://ospanel.io/docs/
*/

<?php
	echo 'Hello, world!';
	print 'Hello, world!';
?>
<?= 'Hello, world'
	/* короткий echo-тег, который является сокращением для
	более многословного <?php echo ?> */
?>

<? echo 'Hello, world!'; // сокращённая версия   ?>

<h1>Пример встраивания PHP в HTML</h1>
<p><?php print('Hello, world!');?> </p>


<p>2 + 2 = <?php echo 2 + 2; ?></p>

<?php
$hello = print 'Hello, ';
echo $hello, ' ', 'world!'; //Hello, 1 world!
?>
//boolean
<?php
$bar = true;
echo $bar; //1
$bar = false;
echo $bar; //пустая строка, ничего не выведет
?>
//integer
<?php
$bar = 1212;
echo $bar; //1212
?>
//float
<?php
$bar = 12.12;
echo $bar; //12.12
?>
//string
<?php
	$bar = 'Hello';
	echo $bar; 				// Hello
	echo "$bar, world!\n";		// Hello, world!
	echo '$bar, world!';		// $bar, world!
?>

//конкатенация == сложение строк
<?php
	$bar = 'world!';
	$var = 123;
	echo 'Hello, ' . $bar ;		// Hello, world!
	echo 'Hello, ' . $var ;		// Hello, 123
?>


<?php
$bar = 1;
$foo = $bar;
echo $foo;//1
?>

<?php
	$addition = 2 + 4; // сложение
	$subtraction = 6 - 2; // вычитание
	$multiplication = 5 * 3; // умножение
	$division = 15 / 3; // деление
	$modulus = 5 % 2; // остаток от деления
	$exponentiation = 5 ** 2; // возведение в степень
?>

<?php
	$foo = 4;
	$bar = 3;
	$result1 = $foo == $bar; //false (равно?)
	$result2 = $foo != $bar; //true (не равно?)
	$result3 = $foo < $bar; //false (меньше)
	$result4 = $foo > $bar; //true (больше)
	$result1 = $foo <= $bar; //false (меньше равно)
	$result1 = $foo >= $bar; //true (больше равно)
// 	'Orel'!='orel'
?>

<?php
	$hello = 'Hello, ';
	$world = 'world';
	$result = $hello . $world;
	echo $result . '!'; 			// Hello, world!
?>

<?php
	$counter = $counter + 2;
	//или
	$counter += 2;
	// аналогично
	$counter -= 2;
	$counter *= 2;
	$counter /= 2;
	$counter %= 2;
	$str = 'test';
	$str=$str . 'bar'//$str='testbar'
	//или
	$str .= 'bar'; //'testbar'
	// и инкрементирование
	$counter = $counter + 1;
	$counter += 1;
	$counter++;
	// и декрементирование
	$counter = $counter - 1;
	$counter -= 1;
	$counter--;
	// Однако
	$counter1 = 0;
	$counter2 = 0;
	$counter1++ != ++$counter2; //true, т.к. 0 != 1
	/*
	когда ++ стоят после переменной, то сначала происходит операция сравнения, а потом присваивание 1.
	*/
	//но при этом уже здесь
	$counter1 == $counter2;//true, т.к. 1 == 1

	$i = 5;
	echo $result = $i++;


	// пример:
	$i = 2;
	$x = $i++; // сначала $x присвоим текущее значение $i (2), затем $i увеличим на 1 (3)
	$y = ++$i; // сначала $i увеличим на 1 (4), затем присвоим новое значение переменной $y (4)
	$z = $i--; // сначала $z присвоим значение $i (4), затем уменьшили $i на 1 (3)
	echo $x;
	echo $y;
	echo $z;

?>

<?php
	function sub($x, $y){
		return $x - $y;
	}

	function mul($x, $y){
		return $x * $y;
	}

	function div($x, $y){
		echo $x / $y;
	}

	$sub = sub(1,3); 	// -2
	$mul = mul(2,3); 	// 6
	$div = div(1,2); 	// 0.5

	echo $sub; 		// -2
	echo $mul; 		// 6
	echo $div; 		// 0.5
?>


<?php
//$sub = sub(1,3); 	// -2
	$mul = mul(2,3); 	// 6
	$div = div(1,2); 	// 0.5

	//echo $sub; 		// -2
	// echo $mul; 		// 6
	// echo $div; 		// пустота

	if ($mul<10) {
		$mul=10;
	}

	while($mul<10){
		$mul++;
	}


	echo "\n".$mul;

	// Цикл-счётчик for удобен для перебора массивов или когда задан диапазон
	for($i = 0; $i < 10; $i++) {
		echo $i;
	}
	// 0123456789

	// Цикл while – цикл, который будет выполнятся, пока условие истинно
	$j = 0;
	while($j < 10) {
		echo $j++;
	}
	// 0123456789

	// Цикл do while сначала выполняет, а потом проверяет условие
	$k = 0;
	do {
		echo $k++;
	} while ($k < 0);
	// 0

	// Цикл foreach нужен для перебора ассоциативных массивов
	$gadgets = [
    	'iPhone' => 1000,
		'iPad' => 800,
		'MacBook' => 1500
	];
	foreach($gadgets as $key => $value) {
		echo 'Name: ' . $key . ': $' . $value . '<br />';
	}
?>

<?php
$arr = [0, 5, 2, -1, 0, 20, 54];
$i = 0;

while($i < count($arr))
{
    if((!$max && $max !== 0)|| $arr[$i] > $max)
    {
        $max = $arr[$i];
    }

    if((!$min && $min !== 0) || $arr[$i] < $min)
    {
        $min = $arr[$i];
    }

    $i++;
}

echo "Min: $min";
echo "Max: $max";

?>

<?php
	$arr1 = [0, 5, 2, -1, 0, 20, 54];
	$max1 = max($arr1); // 54
	$min1 = min($arr1); // -1

	echo "Min: $min1";
	echo "Max: $max1";
?>