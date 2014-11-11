<?php
require_once ("DebugUtil.php");
require_once ("responseError.php");
class ProcessBase {
	protected $userId;
	protected $db;
	public function getUserId() {
		return $this->userId;
	}
	public function setUserId($id) {
		$this->userId = $id;
	}
	protected function dbconnect() {
		if(isset($db)) return;
		@ $this->db = new mysqli ( 'localhost', 'root', 'root', 'phptestdb' );
		if (mysqli_connect_errno ()) {
			$err = new ResponseError ();
			$err->build ( "connect db error" );
			exit ();
		}
	}
	protected function dbclose() {
		if(!isset($db)) return;
		$db->close ();
		unset($db);
	}
	protected function getDb(){
		return $this->db;
	}
}
?>