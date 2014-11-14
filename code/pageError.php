<?php
require_once 'pageView.php';
class PageError extends PageView {
	public function build($msg) {
		$errorMsg = $msg;
		include('pageErrorTemplate.php');
	}
}
