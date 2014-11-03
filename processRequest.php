<?php
require_once("processLogin.php");

echo 'post: ';
foreach ( $_POST as $key => $value ) {
	echo $key . ':' . $value . ' ';
}
echo '<br/>';

$className = 'Process'.$_POST ['requestClass'];

$requestClass = new $className();
$requestClass->process();

echo "end<br/>";
?>