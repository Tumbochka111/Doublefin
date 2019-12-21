<?php namespace  Daragan;
use core\EquationInterface;
class DoubleFun extends LineFun implements EquationInterface{
	protected $result = array();
	protected function dis($a, $b, $c)
	{
		return ($b*$b)-4*$a*$c;
	}
	public function solve($a, $b, $c)
	{
		if ($a==0){
			return $this->line($b, $c);
		}
		DaraganLog::log("It is quadratic equation");
		
		$d=$this->dis($a, $b, $c);
		
		if($d < 0) {
			throw new DaraganException("It is determined that such an equation does not exist. \n");
		}
		if($d==0){
			$cele =-$b/(2*$a);
			$this->result[0]=$cele;
		}elseif($d>0){
			$this->result=array((-$b+sqrt($d))/(2*$a), (-$b-sqrt($d))/(2*$a));
		}
		return $this->result;
	}
}

?>