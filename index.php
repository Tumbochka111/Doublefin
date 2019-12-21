<?php 
define("BASEURI", __DIR__);
date_default_timezone_set("Europe/Moscow");

include BASEURI .'\core\LogAbstract.php';
include BASEURI .'\core\LogInterface.php';
include BASEURI .'\Daragan\DaraganLog.php';
include BASEURI .'\core\EquationInterface.php';
include BASEURI .'\Daragan\LineFun.php';
include BASEURI .'\Daragan\DoubleFun.php';
include BASEURI .'\Daragan\DaraganException.php';

use Daragan\DaraganLog;
use Daragan\LineFun;
use Daragan\DoubleFun;
use Daragan\DaraganException;
  
  
$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
DaraganLog::log('Program version ' . $version);

echo "Enter 3 parameters a, b and c \n";

for($i = 0; $i < 3; $i ++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[$i] =  $number;
}

$a = $kfArray[0];
$b = $kfArray[1];
$c = $kfArray[2];

$eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";
DaraganLog::log("Entered equation: " . $eq);

try {
	$equation = new DoubleFun();
	$roots = $equation->solve($a, $b, $c);
	
	if($kfArray[0] == 0) {
		DaraganLog::log("This equation has 2 roots: " . $roots[0] . ", " . $roots[1] . "\n");
	} else{
		DaraganLog::log("Equation root " . $roots . "\n");
	}
	
} catch(MyException $ex) {
	DaraganLog::log($ex->getMessage() . "\n");
}
DaraganLog::write();

?>