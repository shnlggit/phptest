<?php
require_once("DebugUtil.php");

class ProcessBase {
	protected $userId;
	public function getUserId() {
		return $userId;
	}
	public function setUserId($id) {
		$userId = $id;
	}
}
?>