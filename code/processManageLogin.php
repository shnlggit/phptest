<?php
require_once ("processManageBase.php");
require_once ("manageCommon.php");
class ProcessManageLogin extends ProcessManageBase {
	public function process() {
		// ManageCommon::showError ( "test" );
		$user = $_POST ['user'];
		$password = $_POST ['pswd'];
		try {
			if (! $this->isFilledOut ( $_POST )) {
				throw new Exception ( 'Form not filled out!' );
			}
		} catch ( Exception $e ) {
			ManageCommon::showError ( $e->getMessage () );
			exit ();
		}
	}
	private function isFilledOut($formVars) {
		foreach ( $formVars as $key => $value ) {
			if (! isset ( $key ) || ($value == '')) {
				return false;
			}
		}
		return true;
	}
}