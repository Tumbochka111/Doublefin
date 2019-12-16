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

echo "Enter 3 parameters a, b and c \n";

for($i = 0; $i < 3; $i++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[] =  $number;
}

	$obj= new DoubleFun();
	$abj=$obj->doubl($kfArray[0], $kfArray[1], $kfArray[2]);
	
}

?>