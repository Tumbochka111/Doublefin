<?php

       class lineFun{
	function __construct($result=0)
	{
		$this->result=$result;
	}
	protected $result;
	function line($a, $b)
	{if($a!=null){
		$this->result=-$b/$a;}else echo 'Ты лох, уравнение не решаемо';
	}
	function getResult()
	{
	 
		return $this->result;
	}
	function setResult($n1)
	{
		$this->result=$n1;
	}
}
$a4= new lineFun();
$a4->line(4, -6);
echo($a4->getResult());




class doubleFun extends lineFun {
	protected $kor;
	protected $D;
	protected $x;
	function discrim($a, $b, $c)
	{
		$this->D=($b*$b)-4*$a*$c;
		if($this->D<0){$this->kor=0;}elseif($this->D=0){$this->kor=1;}else{$this->kor=2;}
	}
	function faindKor($a, $b, $c)
	{
		discrim($a, $b, $c);
		if($this->kor>0){
			$x1=(-$b+($this->D/$this->D))/(2*$a);
			$this->x=array( $x1);
			if($this->kor>1){
				$x2=(-$b-($this->D/$this->D))/(2*$a);
				$this->x[] =$x2;
			}
		}
		else echo 'This is not it possible';
	}
	function doubl($a, $b, $c){
		if ($a==0) {
			echo "Это не квадратное уравнение, а линейное";
			line($b, $c);
		}
		else {
			faindKor($a, $b, $c);
			$this->result="x1= implode(' x2= ', $this->x)";
		}
	}	
}

$a5= new doubleFun();
$a5->doubl(1, 4, -6);
echo($a5->getResult());

?>