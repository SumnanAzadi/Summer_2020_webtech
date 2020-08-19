<?php
	require_once('../service/userService.php');

	//create new user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/create.php?error=null');
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
				header('location: ../views/create.php?error=dberror');
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
		if (is_numeric($_POST['id'])) {
			$data =getById($_POST['id']);
			$rows = mysqli_fetch_assoc($data);
			$uname = $rows['username'];
			if ($_SESSION['username'] == $uname) {
				userDelete($uname);
				header('location: ../views/logout.php');
			}else{
				userDelete($uname);
				header('location:../views/login.php');
			}
		}else{
			echo "No data found!!!";
		}
	}else{
		header('location: ../views/login.php');
	}

?>