<?php  
  session_start();
  require('header.html'); 
?>

   <div class="parallax-container">
     <div class="section no-pad-bot">
        <div class="container">
          <br><br>
            <center><img src="images/home.png"/></center>
          <br><br>

        </div>
    </div>
    <div class="parallax"><img src="images/index.jpeg"></div>
  </div>


  <div class="post">

  <?php
  
    include("connect.php");

    $sql_posts = "SELECT * FROM Posts";
    $result_posts = mysqli_query($conn, $sql_posts);

    while($row_posts = mysqli_fetch_assoc($result_posts)) {

      
          echo "<div class='col s12 m6'>";
           echo " <div class='card horizontal hoverable'>";
              echo "<div class='card-image'>";
                echo "<img src= ' ".$row_posts['Location']." ' >";
               echo " <span class='card-title'>".$row_posts['Title']."</span>";
             echo " </div>";
              echo "<div class='card-content'>";
                 echo $row_posts['Message'];
              echo "</div>";
           echo " </div>";
          echo "</div>";
       
      
    }
    ?>

  </div>

  <?php

      require('footer.html');
  ?>