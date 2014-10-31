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
	echo "short style:" . $tireqty; // not work
	echo " medium style:" . $_POST ['tireqty'];
	echo " long style:" . $HTTP_POST_VARS ['tireqty']; // not work
	echo "</p>";
	
	$tireqty = $_POST ['tireqty'];
	$oilqty = $_POST ['oilqty'];
	$sparkqty = $_POST ['sparkqty'];
	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty;
	echo "Items ordered $totalqty<br/>";
	
	define ( 'TIREPRICE', 100 );
	define ( 'OILPRICE', 10 );
	define ( 'SPARKPRICE', 4 );
	
	$totalamount = 0.0;
	$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty + SPARKPRICE;
	echo 'Subtotal: $' . number_format ( $totalamount, 2 ) . '<br/>';
	
	$taxrate = 0.10;
	$totalamount = $totalamount * (1 + $taxrate);
	echo 'Total include tax: $' . number_format ( $totalamount, 2 ) . '<br/>';
	?>
</body>
</html>