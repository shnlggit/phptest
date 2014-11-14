<?php
require_once 'debugUtil.php';
require_once 'managerLoginView.php';
class Management {
	function __construct() {
		DebugUtil::logln("Managerment construct");
	}
	function __destruct() {
		DebugUtil::logln("Managerment destruct");
	}
	function start() {
		if (session_status () == PHP_SESSION_NONE) {
			session_start ();
		}
		if ($this->isLoggedIn ()) {
			DebugUtil::logln("Already logged in");
			// main
		} else {
			DebugUtil::logln("Not logged in");
			// login
			$this->login();
		}
	}
	private function isLoggedIn() {
		return isset ( $_SESSION ['valid_user'] );
	}
	private function login(){
		$login_view = new ManagerLoginView();
		$login_view->build();
	}
}
