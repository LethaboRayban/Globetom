<?php
	
    include("connect.php");

	$file_name = $_FILES['image']['name'];
	$file_tmp = $_FILES['image']['tmp_name'];

	move_uploaded_file($file_tmp, "images/".$file_name);

	$title = $_POST['post_title'];
    $post = $_POST['add_post'];
	

    $sql = "INSERT INTO Posts (Location, Title, Message) VALUES ('images/".$file_name."', '$title', '$post')";
    echo $sql;
    $result = mysqli_query($conn, $sql);

    if($result)
    	header("location: admin.php");
?>