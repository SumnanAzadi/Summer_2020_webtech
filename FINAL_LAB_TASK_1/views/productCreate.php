<?php
	
	require_once('../php/sessionController.php');	

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
	<form action="../php/productEditController.php" method="post">
		<fieldset>
			<legend>Create New Product</legend>
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>description</td>
					<td><input type="text" name="description"></td>
				</tr>
				<tr>
					<td>quantity</td>
					<td><input type="text" name="quantity"></td>
				</tr>
				<tr>
					<td>date</td>
					<td><input type="date" name="date"></td>
				</tr>
				<tr>
					<td>price</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>status</td>
					<td><input type="text" name="status"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="productCreate" value="Productcreate">
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>