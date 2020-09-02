<head>
	
</head>
<body>
	<div class="userCreate">
	<form name="userCreate" method="post">
		<fieldset>
			<legend>Create New User</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" name="create" value="Register" onclick = "efg()">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	</div>
	<div id="data"></div>
<script type="text/javascript" src="app.js"></script>
</body>