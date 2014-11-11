<?php
require_once ("responseBase.php");
class responseError extends ResponseBase {
	public function build($errorMessage) {
		$this->set ( "Error", $errorMessage );
		$this->set ( "ErrorNo", 123 );
		parent::build ();
	}
}
?>