<?php namespace  Daragan;
use core;
class LineFun{
	
	protected $result;
	function __construct($result=0){
		}
	public function line($a, $b){
		if($a == 0) {
			throw new DaraganException("Error: the equation has no solutions \n");
		}

		DaraganLog::log("It is linear equation");
		$this->result=array(($b * -1)/$a);
		
		return $this->result;
	}
}

?>