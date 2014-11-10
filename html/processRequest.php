<?php
require_once("../code/processLogin.php");
require_once("../code/DebugUtil.php");

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