<?php namespace  Daragan;
use core;
Class Linear {
  // решение уравнения(ответ)
  protected $x = [];

  public function __construct() {
  }

  public function Linear($k, $b) {
	if($k == 0) {
		throw new MyException("This is not an equation \n");
	}
	
    DaraganLog::log("Linear equation is entered");
  	$this->x[] = round(($b * -1)/$k, 3);

	return $this->x;
  }
}

?>