<?php
require_once ("../code/processLogin.php");
require_once ("../code/DebugUtil.php");
require_once ("../code/responseError.php");

if (! isset ( $_POST ['requestClass'] )) {
	// exit;
	$err = new ResponseError ();
	$err->build ( "request class not found" );
	exit;
}

DebugUtil::log ( 'post: ' );
foreach ( $_POST as $key => $value ) {
	DebugUtil::log ( $key . ':' . $value . ' ' );
}
DebugUtil::logln ( "" );

$className = 'Process' . $_POST ['requestClass'];

$requestClass = new $className ();
$requestClass->process ();

DebugUtil::logln ( "end" );
;
?>