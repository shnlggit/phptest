<?php
require_once ("debugUtil.php");
require_once ("manageCommon.php");
require_once ("processBase.php");
class ProcessManageBase extends ProcessBase {
	protected function showError($msg) {
		ManageCommon::showError ( $msg );
	}
}
?>