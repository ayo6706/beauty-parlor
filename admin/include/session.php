<?php session_start();

	if (!isset($_SESSION['user_name'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../index.html');
	}


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user_name']);
		header("location: ../index.html");
	}




include 'db.php';
?>