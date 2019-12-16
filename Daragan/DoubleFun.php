<?php namespace  Daragan;
use core\EquationInterface;
class DoubleFun extends LineFun implements EquationInterface{
	protected $result = array();
	protected function dis($a, $b, $c)
	{
		return ($b*$b)-4*$a*$c;
	}
	public function doubl($a, $b, $c)
	{
		if ($a==0){
			return $this->line($b, $c);
		}
		
		
		$d=$this->dis($a, $b, $c);
		
		if($d==0){
			$this->result[]=-$b/(2*$a);
		}elseif($d>0){
			$this->result=array((-$b+sqrt($d))/(2*$a), (-$b-sqrt($d))/(2*$a));
		}
		return $this->result;
	}
}

?>