<?php
require_once ("processBase.php");
class ProcessLogin extends ProcessBase {
	public function process() {
		DebugUtil::logln ( "login..." );
		if (! isset ( $_POST ['qqid'] )) {
			$err = new ResponseError ();
			$err->build ( "QQ not found" );
			exit ();
		}
		$qqid = $_POST ['qqid'];
		
		$this->dbconnect ();
		
		$query = "SELECT * FROM user WHERE qq=" . $qqid;
		//$query = "SELECT * FROM user";
		$result = $this->getDb()->query ( $query );
		
		if ($result) {
			DebugUtil::logln("found");
			// found user
			$row = $result->fetch_array ();
			DebugUtil::logln($row);
		} else {
			DebugUtil::logln("not found");
			// not found user, create user
			// INSERT INTO `phptestdb`.`user` (`qq`, `score`) VALUES ('123', '0');
			$query = "INSERT INTO user (`qq`, `score`) VALUES ('".$qqid."', '0')";
			$result = $this->getDb()->query ( $query );
		}
		
		$this->dbclose ();
	}
}
?>