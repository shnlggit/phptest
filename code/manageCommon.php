<?php
require_once 'debugUtil.php';
require_once 'pageError.php';
require_once 'manageLoginView.php';
class ManageCommon {
	static function startSession() {
		if (session_status () == PHP_SESSION_NONE) {
			session_start ();
		}
	}
	static function isLoggedIn() {
		return isset ( $_SESSION ['valid_user'] );
	}
	static function setLogIn($user) {
		$_SESSION ['valid_user'] = $user;
	}
	static function showLogin() {
		$login_view = new ManageLoginView ();
		$login_view->build ();
	}
	static function showError($msg) {
		$error_page = new PageError ();
		$error_page->build ( $msg );
	}
}
