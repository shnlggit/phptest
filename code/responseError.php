<?php
require_once ("responseBase.php");
class responseError extends ResponseBase {
	public function build($errorMessage) {
		$this->set ( "Error", $errorMessage );
		parent::build ();
	}
}
?>