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
	  if(!is_dir(BASEURI . '\log')) {
	mkdir(BASEURI . '\log');
}
		$d = new \DateTime();
		file_put_contents(BASEURI . '/log/' . $d->format('d.m.Y_H-i-s') . '.log', implode("\r\n", DaraganLog::Instance()->log));
	echo implode("\n", DaraganLog::Instance()->log);
  }

}

?>