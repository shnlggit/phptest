<?php
require_once 'debugUtil.php';
require_once 'manageCommon.php';
class Management {
	function __construct() {
		// DebugUtil::logln("Managerment construct");
	}
	function __destruct() {
		// DebugUtil::logln("Managerment destruct");
	}
	function start() {
		ManageCommon::startSession ();
		if (ManageCommon::isLoggedIn ()) {
			// DebugUtil::logln("Already logged in");
			// main
		} else {
			// DebugUtil::logln("Not logged in");
			// login
			ManageCommon::showLogin ();
		}
	}
}
