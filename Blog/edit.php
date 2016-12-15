<?php  
	
	require('header.html');
?>

<div class="post">
	<?php

		include("connect.php");
		session_start();

		$postToEdited = $_POST['message_id'];

		$sql = "SELECT * FROM Posts WHERE Post_id = '$postToEdited'";
		$result = mysqli_query($conn, $sql);
		$row_posts = mysqli_fetch_assoc($result);


		echo "<form class='col s12' method='POST' action='edited_post.php' enctype='multipart/form-data'>

	      <div class='row'>
	        <div class='file-field input-field col s12'>
	          <div class='btn'>
	            <span>Add Post Picture</span>
	            <input type='file' name='image' id='image'>
	          </div>
	          <div class='file-path-wrapper'>
	            <input class='file-path validate' type='text' placeholder='Upload image of post'>
	          </div>
	        </div>
	      </div>

	      <div class='row'>
	        <div class='input-field col s12'>
	          <i class='material-icons prefix'>mode_edit</i>
	          <input value='".$row_posts['Title']."' id='edit_tile' name='edit_title' class='materialize-textarea'>
	          <label class='active' for='edit_title'>Edit Title</label>
	        </div>  
	      </div>

	      <div class='row'>
	        <div class='input-field col s12'>
	          <i class='material-icons prefix'>mode_edit</i>
	          <input value='".$row_posts['Message']."' id='edit_post' name='edit_post' class='materialize-textarea'>
	          <label class='active' for='edit_post'>edit Post</label>
	        </div>
	      </div>

	      <input type='hidden' value='".$postToEdited."' name='edited_id' id='edited_id'>

			 <button class='waves-effect waves-light btn' type='submit' name='edit'>Post<i class='material-icons right'>send</i></button>

		 </form>";
	        
echo "</div>";

	
	require('footer.html');

?>