<?php
require_once ("debugUtil.php");
require_once ("processBase.php");
require_once ("pageError.php");
class ProcessManageBase extends ProcessBase {
	protected function showError($msg) {
		$error_page = new PageError();
		$error_page->build($msg);
	}
}
?>