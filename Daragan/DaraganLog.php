<?php  namespace  Daragan;
use core\LogInterface;
use core\LogAbstract;
class DaraganLog extends LogAbstract implements LogInterface{
 protected static $i;
  protected $log = array();

  public static function write() {
	return DaraganLog::Instance()->_write();
  }

  public static function log($str) {
    DaraganLog::Instance()->log[] = $str;
  }

  public function _write() {
	  $d = new \DateTime();
	  file_put_contents(baseuri. ''. $d->('d.m.Y_H-i-s'). '.log', implode("\r", DaraganLog::Instance()->log));
	echo implode("\n", DaraganLog::Instance()->log);
  }

}

?>