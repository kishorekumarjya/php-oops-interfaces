<?php
class class1{
	public $x=1;
	function fun1(){
		return $this->x++;
	}
}

$obj1=new class1();
$obj2=new class1();

$obj1->fun1();
echo $obj1->x;

echo "<br/>";

echo $obj2->x;

/*class class1{
	function __construct($y){
		$this->x=$y;
	}
	
	function fun1(){
		echo $this->x;
	}
	
	function __destruct(){
		echo "end";
	}
}

$obj1=new class1(20);
$obj1->fun1();*/
?>