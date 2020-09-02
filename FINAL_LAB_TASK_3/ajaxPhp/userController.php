<?php
	require_once('../service/userService.php');

	//create new user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/userCreate.php?error=null');
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email
			];
			$status = create($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/userCreate.php?error=dberror');
			}
		}	
	}

	//edit new user
	if(isset($_POST['update'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id='.$id);
		}else{
			$user = [
				'username'	=>$username,
				'password'	=>$password,
				'email'		=>$email,
				'id'		=>$id

			];

			$status = update($user);
			if($status){
				header('location: ../views/user_list.php?msg=success');
			}else{
				header('location: ../views/edit.php?id='.$id);
			}
		}	
	}

	if (isset($_POST['delete'])) {
		$username 	= $_POST['username'];
		$user = ['username'	=>$username];
		$status = userDelete($user);
		if($status){
			header('location: ../views/login.php?msg=deleted');
		}else{
			header('location: ../views/edit.php?id='.$id);
		}
	}

?>