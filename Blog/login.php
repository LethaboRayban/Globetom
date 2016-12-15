<?php
	
	include("connect.php");

	$username = $_POST['username_login'];
	$password = $_POST['password_login'];

	$password = hash('sha256', $password);
	
	$sql = "SELECT * FROM Users where User_name = '$username' AND Password ='$password'";
	$result = mysqli_query($conn, $sql);

	if($result) {

		if(mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			session_start();

			$_SESSION["id"] = $row['User_id'];
			$_SESSION["username"] = $row['User_name'];

			if($_SESSION["username"] == "admin") {

				header("location: admin.php");
			}

			else {
				
				header("location: home.php");
			}

		}

		else
			$message = "Incorrect details. Try again";
			echo "<script type='text/javascript'>alert('$message'); window.location = 'index.php';</script>";
			
	}
	
?>