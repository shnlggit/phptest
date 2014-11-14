<?php
require_once ("processBase.php");
class ProcessLogin extends ProcessBase {
	public function process() {
		DebugUtil::logln ( "login..." );
		if (! isset ( $_POST ['qqid'] )) {
			$err = new ResponseJsonError ();
			$err->build ( "QQ not found" );
			exit ();
		}
		$qqid = $_POST ['qqid'];
		
		$this->dbconnect ();
		
		$query = "SELECT * FROM user WHERE qq=" . $qqid;
		//$query = "SELECT * FROM user";
		$result = $this->getDb()->query ( $query );
		
		DebugUtil::logln($result);
		if ($result && $result->num_rows > 0) {
			DebugUtil::logln("found");
			// found user
			$row = $result->fetch_array ();
			DebugUtil::logln($row);
			$result->free();
		} else {
			DebugUtil::logln("not found");
			$result->free();
			// not found user, create user
			$query = "INSERT INTO user (`qq`, `score`) VALUES ('".$qqid."', '0')";
			$result = $this->getDb()->query ( $query );
			if(!$result){
				DebugUtil::logln("create user failed!");
			}
		}
		
		$this->dbclose ();
	}
}
?>