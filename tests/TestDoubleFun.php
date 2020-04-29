<?php
namespace Daragan;

use PHPUnit\Framework\TestCase;
include __DIR__ . "/../Daragan/DoubleFun.php";

final class TestDoubleFun extends TestCase
{   
    public function testDoubleException($a, $b, $c) {
      $inst = new DoubleFun();
      $inst->solve($a, $b, $c);
    }
    public function providerDoubleException() {
      return array(
            array(0, 0, 0),
            array(0, 0, 3),
            array(2, null, 1),
            array(1, 3, 'S'),
            array(9, -6, 2)
      );
    }
	public function testDouble($a, $b, $c, $x) {
      $inst = new DoubleFun();
      $this->assertEquals($x, $inst->solve($a, $b, $c));
    }
    public function providerDouble() {
      return array(
          array(2, 5,-7, [6, -8.5]),
          array(6, -18, 5, [0.25])
      );
    }
}
