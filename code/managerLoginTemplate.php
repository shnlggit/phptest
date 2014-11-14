<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>request test</title>
</head>
<body>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="ManagerLogin" />
		<table>
			<tr>
				<td>User name:</td>
				<td><input type="text" name="user" /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pswd" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
</body>