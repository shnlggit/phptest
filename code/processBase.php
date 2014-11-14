<?php
require_once ("debugUtil.php");
require_once ("responseJsonError.php");
class ProcessBase {
	protected $db;
	protected function dbconnect() {
		if (isset ( $db ))
			return;
		@ $this->db = new mysqli ( 'localhost', 'root', 'root', 'phptestdb' );
		if (mysqli_connect_errno ()) {
			$this->showError ( "connect db error" );
			exit ();
		}
	}
	protected function dbclose() {
		if (! isset ( $db ))
			return;
		$db->close ();
		unset ( $db );
	}
	protected function getDb() {
		return $this->db;
	}
	protected function showError($msg) {
		$err = new ResponseJsonError ();
		$err->build ( $msg );
	}
}
?>