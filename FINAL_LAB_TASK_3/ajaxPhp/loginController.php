<?php
	session_start();

	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../ajaxViews/login.php?error=null');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password
			];

			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				header('location: ../ajaxViews/home.php');
			}else{
				header('location: ../ajaxViews/login.php?error=invalid');
			}
		}
		
	}
?>