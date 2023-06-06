<?php
/**
 * Class example...
 * Note: - class name not case sensite 
 */
class class1
{
	public $num = 10;
	public function fun1()
	{
		echo "fun1 msg";
	}

	function fun2()
	{
		echo "fun2 msg".'<br>';
	}
}

$obj1 = new class1();

$obj2 = new class1();
echo $obj1->num.'<br>';
echo $obj1->fuN1().'<br>';
echo $obj2->num.'<br>';
