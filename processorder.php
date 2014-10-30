<html>
<head>
<title>order result</title>
</head>
<body>
	<h1>Bob's auto Parts</h1>
	<h2>Order Results</h2>
	<?php
	echo "<p>Oerder processed at ";
	echo date ( 'H:i, jS F Y' );
	echo "</p>";
	echo "<p>Oerder processed at " . date ( 'H:i, jS F Y' ) . "</p>";
	
	// 3 ways to get post
	echo "<p>";
	echo "short style:" . $tireqty;//not work
	echo " medium style:" . $_POST ['tireqty'];
	echo " long style:" . $HTTP_POST_VARS ['tireqty'];//not work
	echo "</p>";
	?>
</body>
</html>