<?php
require_once ("debugUtil.php");
require_once ("baseView.php");
class ResponseJson extends BaseView{
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
