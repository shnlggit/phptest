<?php
require_once ("DebugUtil.php");
class ResponseBase {
	protected $arrayData;
	function _construct() {
		$arrayData = array ();
	}
	public function set($key, $value) {
		$this->arrayData [$key] = $value;
	}
	public function build() {
		$jsonStr = json_encode ( $this->arrayData );
		echo $jsonStr;
	}
}
?>