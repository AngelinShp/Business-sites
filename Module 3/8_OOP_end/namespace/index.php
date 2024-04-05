<?php
	header('Content-Type: text/html; charset=utf-8');
	include_once('./Test/Test.php');
	include_once('./Test/Foo/Foo.php');
	use Test\Test; //используем класс Test из пространства имён Test
	use Test\Foo\Foo as Foo; //используем класс Foo из пространства имён Test\Foo

	$test = new Test();
	echo $test->test, '<br />';
	$test->test = 'Теперь я не private, а bar';
	echo $test->test, '<br />';
	echo Foo::foo(), '<br />';

?>

<!DOCTYPE HTML>
<html>
    <head>
     <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8"> -->
     <title>Неймспейсы</title>
    </head>

    <body>
		<p>Это работа неймспейсов.</p>
		<?= $test->test ?><br />
		<?= Foo::foo() ?><br />
    </body>
</html>


<?php
/*
	namespace Test\Test1 {
		const TEST = 0;
		class Test{}
		function test () {}
	}
	
	namespace Test\Test2 {
		const TEST = 0;
		class Test{}
		function test () {}
	}


// где-то есть пространство A
namespace B{
use A\ClassA; // взяли некий класс в пространстве А и вставили в B
use A\ClassSuper as Super; //создали псевдоним ClassSuper -> Super
use function A\funs\foo as bar; //импортировали функцию foo с псевдонимом bar
// примеры работы
$obj = new ClassA();
$obj2 = new Super();
$obj3 = new A\Test\Test();
$varBar = bar($obj);
}

*/
?>
