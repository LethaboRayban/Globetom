<?php

	include('connect.php');

	$file_name = $_FILES['image']['name'];
	$file_tmp = $_FILES['image']['tmp_name'];

	move_uploaded_file($file_tmp, "images/".$file_name);

	$new_title = $_POST['edit_title'];
	$new_post = $_POST['edit_post'];
	$id = $_POST['edited_id'];

	$sql = "UPDATE Posts SET Title='Message='$new_post' WHERE Post_id = '$id' ";
	$result = mysqli_query($conn, $sql);
	

	$sql2 = "UPDATE Posts SET Title='$new_title' WHERE Post_id = '$id' ";
	$result2 = mysqli_query($conn, $sql2);


	if($file_name != null) {

		$sql3 = "UPDATE Posts SET Location='$file_name' WHERE Post_id = '$id' ";
		$result3 = mysqli_query($conn, $sql3);

	}

	header('Location: admin.php');	
?>