<?php
require_once ("processManageBase.php");
require_once ("manageCommon.php");
class ProcessManageLogin extends ProcessManageBase {
	public function process() {
		// ManageCommon::showError ( "test" );
		$user = $_POST ['user'];
		$password = $_POST ['pswd'];
		try {
			$this->checkFillOut ( $_POST );
		} catch ( Exception $e ) {
			ManageCommon::showError ( $e->getMessage () );
			exit ();
		}
	}
	private function checkFillOut($formVars) {
		foreach ( $formVars as $key => $value ) {
			if (! isset ( $key ) || ($value == '')) {
				throw new Exception ( 'Form not filled out!' );
			}
		}
	}
}