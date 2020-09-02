<?php
	require_once('../service/userService.php');
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];
	if(empty($username) || empty($password) || empty($email)){
		echo "something wrong";
	}else{
		$user = [
			'username'	=>$username,
			'password'	=>$password,
			'email'		=>$email
		];
		$status = create($user);
		if($status){
			echo "Successfully Created. You can Log In now";
		}else{
			echo "something wrong ...please try again.";
		}
	}
?>