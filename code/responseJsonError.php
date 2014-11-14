<?php
require_once ("responseJson.php");
class ResponseJsonError extends ResponseJson {
	public function build($errorMessage) {
		$this->set ( "Error", $errorMessage );
		$this->set ( "ErrorNo", 123 );
		parent::build ();
	}
}
?>