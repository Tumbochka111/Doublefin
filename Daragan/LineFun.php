<?php namespace  Daragan;
use core;
class LineFun{
	function __construct($result=0){
		$this->result=$result;
	}
	protected $result;
	public function getResult(){
	 
		return $this->result;
	}
	public function setResult($n1){
		$this->result=$n1;
	}
	public function line($a, $b){
		if($a == 0) {
			throw new DaraganException("Error: the equation has no solutions \n");
		}

		DaraganLog::log("It is linear equation");
		$this->result=-$b/$a;
		return $this->result;
	}
}

?>