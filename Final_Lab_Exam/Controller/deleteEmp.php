<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['userType']!="admin") {
	header('location: ../index.php');
	exit();
}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql = "DELETE FROM users WHERE id='$id'";
	if (mysqli_query($conn,$sql)) {
		$_SESSION['message'] = "<font color='green'>Sucessfully deleted!!!</font><br>";
		header('location: ../Views/authorList.php');
	}else{
		$_SESSION['message'] = "<font color='red'>DB error!!!</font><br>";
		header('location: ../Views/empList.php');
	}
}else{
	header('location: ../Views/authorList.php');
}