<?php 

include 'core\LogAbstract.php';
include 'core\LogInterface.php';
include 'Daragan\DaraganLog.php';
include 'core\EquationInterface.php';
include 'Daragan\LineFun.php';
include 'Daragan\DoubleFun.php';
include 'Daragan\DaraganException.php';

use Daragan\DaraganLog;
use Daragan\LineFun;
use Daragan\DoubleFun;
use Daragan\DaraganException;

ini_set("display_errors", 1); 
error_reporting (-1); 

echo "Enter 3 parameters a, b and c \n";

for($i = 0; $i < 3; $i++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[] =  $number;
}
try {
	$obj= new DoubleFun();
	$abj=$obj->doubl($kfArray[0], $kfArray[1], $kfArray[2]);
	if($kfArray[0]==0){
		DaraganLog::log("The equation is introduced:".$kfArray[1] . "x + " . $kfArray[2] . " = 0");
		DaraganLog::log("The roots of the equation: " . $abj."\n");
	}
	else{
		DaraganLog::log("The equation is introduced:".$kfArray[0] . "x^2 + " .$kfArray[1] . "x + " . $kfArray[2] . " = 0");
		DaraganLog::log("The roots of the equation: " . $abj[0] . ", " . $abj[1] . "\n");
	}	
} catch(DaraganException $ex) {
	DaraganLog::log($ex->getMessage());
}
DaraganLog::write();

?>