<?php
	
	require_once('../db/db.php');
	
	function getById($id){
		$con = dbConnection();
		$sql = "select * from products where product_id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getAllProduct(){
		$con = dbConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;
	}

	function create($product){
		$con = dbConnection();
		$sql = "insert into products values('', '{$product['name']}', '{$product['description']}', '{$product['quantity']}', '{$product['date']}', '{$product['price']}',  '{$product['status']}',  '{$product['product_img']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($product){
		$con = dbConnection();
		$sql = "update users set product_id='{$product['product_id']}', name='{$product['name']}', description='{$product['description']}',
		quantity='{$product['quantity']}',date='{$product['date']}',price='{$product['price']}', status='{$product['status']}', product_img='{$product['product_img']}', where product_id={$product['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function userDelete($product){
		$con = dbConnection();
		$sql = "delete from products where product_id = '{$product['product_id']}'";
		mysqli_query($con,$sql);
	}

?>