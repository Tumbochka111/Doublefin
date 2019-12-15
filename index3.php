<?php 
include 'core\logabstract.php';
include 'core\loginterface.php';
include '..\core\equationinterface.php';
include 'daragan\linefun.php';
include 'daragan\doublefun.php';
include 'daragan\log.php';
use Daragan\linefun;
use Daragan\doublefun;
use Daragan\log;

$a4= new Daragan\LineFun();
try{
	$a4->line(4, -6);
}catch(DaraganException $e){
	echo 'Ты лох, уравнение не решаемо';
}	
echo($a4->getResult());
echo "\n";
$a5= new Daragan\DoubleFun();
try{
	$a5->doubl(1, -5, 6);
}
catch(DaraganException $e){
	echo 'This is not it possible';
}	
echo var_dump($a5->getResult());

?>