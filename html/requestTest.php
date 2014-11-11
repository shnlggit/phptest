<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>request test</title>
</head>
<body>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="Login" />
		<table>
			<tr>
				<td>login</td>
			</tr>
			<tr>
				<td>QQ</td>
			</tr>
			<tr>
				<td><input type="text" name="qqid" value="1"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="Time" />
		<table>
			<tr>
				<td>time</td>
			</tr>
			<tr>
				<td><input type="text" name="id" value="1"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
</body>
</html>