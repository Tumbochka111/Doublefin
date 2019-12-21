<?php namespace  Daragan;
use core\EquationInterface;
class DoubleFun extends LineFun implements EquationInterface{
	protected function dis($a, $b, $c)
	{
		return pow($b, 2) - 4 * $a * $c;
	}
	public function solve($a, $b, $c)
	{
		if ($a==0){
			$this->result = array($this->line($b, $c));
			return $this->result[0];
		}
		DaraganLog::log("It is quadratic equation");
		
		$d=$this->dis($a, $b, $c);
		
		if($d < 0) {
			throw new DaraganException("It is determined that such an equation does not exist. \n");
		}
		if($d==0){
			$this->result=array(-$b/(2*$a));
		}elseif($d>0){
			$this->result=array((-$b+sqrt($d))/(2*$a), (-$b-sqrt($d))/(2*$a));
		}
		return $this->result;
	}
}

?>