<?php
session_start();
require_once 'DB/config.php';
if (isset($_SESSION['logged_in'])) {
	header('location: Views/dashboard.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body style="width:50%">

	<h1>Login page</h1>
	<center>
		<?php
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
		}
		?>
	</center>
	<br>
	<form action="Controller/login.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>