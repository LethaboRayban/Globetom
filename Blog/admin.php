<?php  
  session_start();
  require('header.html');
?>

  <div class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
          <br><br>
            <center><img src="images/admin.png" height="30%" /></center>
          <br><br>

        </div>
    </div>
    <div class="parallax"><img src="images/index.jpeg"></div>
  </div>

  <h3 class="header center blue-text text-darken-5">Add Post</h3>


  <div class="row">
    <form class="col s12" method="POST" action="addPost.php" enctype="multipart/form-data">

      <div class="row">
        <div class="file-field input-field col s6">
          <div class="btn">
            <span>Add Post Picture</span>
            <input type="file" name="image" id="image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload image of product">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="post_tile" name="post_title" class="materialize-textarea"></textarea>
          <label for="add_title">Post Title</label>
        </div>  
      </div>

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="add_post" name="add_post" class="materialize-textarea"></textarea>
          <label for="add_post">Add Post</label>
        </div>
      </div>

      <button class="waves-effect waves-light btn" type="submit" name="submit_login">Post<i class="material-icons right">send</i></button>

    </form>
  </div>    

  <div class="center-align">

  <?php
  
    include("connect.php");

    $sql_posts = "SELECT * FROM Posts";
    $result_posts = mysqli_query($conn, $sql_posts);

    while($row_posts = mysqli_fetch_assoc($result_posts)) {

       echo "<div class='row'>";

          echo "<div class='col s12 m6'>";
           echo " <div class='card horizontal medium hoverable'>";

              echo "<div class='card-image'>";
                echo "<img src= ' ".$row_posts['Location']." ' >";
               echo " <span class='card-title'>".$row_posts['Title']."</span>";
             echo " </div>";

              echo "<div class='card-content'>";
                 echo $row_posts['Message'];
              echo "</div>";

           echo " </div>";
          echo "</div>";

          echo " <form class='col s6' method='post' action='edit.php'>
                  <input type='hidden' value=".$row_posts['Post_id']." name='message_id' id='massage_id'>
                   <button class='btn-floating btn-large waves-effect waves-light red' type='submit' name='edit_post' id='edit_post'>
                      <i class='material-icons right'>mode_edit</i>
                   </button>
                 </form>";

          echo " <form class='col s6' method='POST' action='delete.php'>
                    <input type='hidden' value=".$row_posts['Post_id']." name='delete_id' id='delete_id'>
                      <button class='btn-floating btn-large waves-effect waves-light red type='submit' name='delete_post' id='delete_post'>
                          <i class='material-icons right'>delete</i>
                      </button>
                  </form>";
      echo " </div>";

    }

    require('footer.html');
    ?>


