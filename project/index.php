<?php
class B{

}
class A extends B{
	public $n1;
	public $n2;
	function __construct($n1, $n2){
		$this->n1=$n1;
		$this->n2=$n2;
	}

}
$a4= new B();
$a5= new B();
$a2= new A($a4, $a5);
$a3= new B();
$a1= new A($a2, $a3);
?>