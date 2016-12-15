<?php
	
	include("connect.php");
	session_start();

	$postToDelete = $_POST['delete_id'];
	
	$sql = "DELETE FROM Posts WHERE Post_id = '$postToDelete'";
	$result = mysqli_query($conn, $sql);

	if (result) {

		header('location:admin.php');
	}
	
?>