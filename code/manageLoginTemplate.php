<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>request test</title>
</head>
<body>
	<form action="manageRequest.php" method="post">
		<input name="requestClass" value="ManageLogin" type="hidden">
		<table style="background-color: rgb(51, 102, 255);" align="center">
			<tbody>
				<tr>
					<td>User name:</td>
					<td><input name="user" type="text"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input name="pswd" type="password"></td>
				</tr>
				<tr>
					<td style="text-align: center;" colspan="2"><input value="Login"
						type="submit"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
