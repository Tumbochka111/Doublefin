<?php
namespace Daragan;

use PHPUnit\Framework\TestCase;
include BASEURI .'\..\core\LogAbstract.php';
include BASEURI .'\..\core\LogInterface.php';
include BASEURI .'\..\Daragan\DaraganLog.php';
include BASEURI .'\..\core\EquationInterface.php';
include BASEURI .'\..\Daragan\LineFun.php';
include BASEURI .'\..\Daragan\DaraganException.php';

final class TestLineFun extends TestCase
{
	public function providerLine() {
      return array(
            array(5, -6, [7]),
            array(-1.5, 4.5, [11])
      );
    }
    public function providerLineException() {
      return array(
            array('S', 1),
            array(0, 1),
            array(1, 'S')
      );
    }
	public function testLineFun($k, $b, $x) {
      $fan = new LineFun();
      $this->assertEquals($x, $fan->line($k, $b));
    }
    public function testLineException($k, $b) {
      $fan = new LineFun();
      $fan->line($k, $b);
}
