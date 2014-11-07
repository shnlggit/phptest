<?php
require_once("processLogin.php");
require_once("DebugUtil.php");

DebugUtil::log('post: ');
foreach ( $_POST as $key => $value ) {
	DebugUtil::log($key . ':' . $value . ' ');
}
DebugUtil::logln("");

$className = 'Process'.$_POST ['requestClass'];

$requestClass = new $className();
$requestClass->process();

DebugUtil::logln("end"); ;
?>