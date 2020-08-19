<?php
	require_once('../service/productService.php');

	//create a product
	if(isset($_POST['productCreate'])){
		$name 	= $_POST['name'];
		$description 	= $_POST['description'];
		$quantity 	= $_POST['quantity'];
		$date 	= $_POST['date'];
		$price 	= $_POST['price'];
		$status 	= $_POST['status'];
		$product_img 	= $_POST['product_img'];

		if(empty($name) || empty($description) || empty($quantity) || empty($date) || empty($quantity) || empty($price) || empty($status) || empty($product_img) ){
			header('location: ../views/productCreate.php?error=null');
		}else{
			$product = [
				'name'	=>$name,
				'description'	=>$description,
				'quantity'		=>$quantity,
				'date'		=>$date,
				'price'		=>$price,
				'status'		=>$status,
				'product_img'		=>$product_img,
			];
			$status = create($product);
			if($status){
				header('location: ../views/productCreate.php?msg=success');
			}else{
				header('location: ../views/productCreate.php?error=dberror');
			}
		}	
	}

?>