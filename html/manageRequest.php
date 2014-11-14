<?php
require_once ("../code/debugUtil.php");
require_once ("../code/processManageLogin.php");

if (! isset ( $_POST ['requestClass'] )) {
	// exit;
	//$err = new ResponseJsonError ();
	//$err->build ( "request class not found" );
	exit ();
}

DebugUtil::log ( 'post: ' );
DebugUtil::logln ( $_POST );

$className = 'Process' . $_POST ['requestClass'];

$requestClass = new $className ();
$requestClass->process ();