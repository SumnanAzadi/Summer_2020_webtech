<?php
	require_once('../php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home <?=$_SESSION['username']?></h1>
	<div style="display: flex;">
		<div class="leftbar" style="width: 50%">
			<table>
				<td>
					<tr>
						<td>
							<input type="button" id="mol" value="Create New User" onclick="op()"> |
						</td>
						<td>
							<input type="button" id="mol" value="Create New User" onclick="def()"> |
						</td>
						<td>
							<input type="button" id="lol" value="User list" onclick="abc()"> |
						</td>
						<td>
							<a href="../ajaxPhp/logoutController.php"> logout</a>
						</td>
					</tr>
			</table>
		</div>
		<div id="rightbar" style="width: 50%">
			<h1>20</h1>
		</div>
	</div>
	<script type="text/javascript" src="app.js"></script>
</body>
</html>
