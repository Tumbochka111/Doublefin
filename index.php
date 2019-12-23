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
  
  
$version = file_get_contents(BASEURI . '/version');
DaraganLog::log('Program version ' . $version);

echo "Enter 3 parameters a, b and c \n";

for($i = 0; $i < 3; $i++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[] =  $number;
}
try {
	DaraganLog::log("The equation is introduced:" . $kfArray[0] . "x^2 + " . $kfArray[1] . "x + " . $kfArray[2] . " = 0");
	$obj= new DoubleFun();
	$abj=$obj->solve($kfArray[0], $kfArray[1], $kfArray[2]);
	DaraganLog::log("The roots of the equation: " . implode(",", $abj)."\n");
	}	
catch(DaraganException $ex) {
	DaraganLog::log($ex->getMessage());
}

DaraganLog::write();

?>