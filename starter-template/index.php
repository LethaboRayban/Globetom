<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Globetom Blog</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img alt="Globetom Blog" src="images/logo.png" height="80px" /></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="row">

    <div class="col s6">

      <h1 class="header blue-text">Sign Up</h1>
      <form method="POST" action="signUp.php">

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="user_name" name="user_name" type="text" class="validate">
            <label for="first_name">User Name</label>
          </div>
        </div>

         <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        
         <button class="waves-effect waves-light btn" type="submit" name="submit">Sign Up<i class="material-icons right">send</i></button>

      </form>
    </div>

    <div class="col s6">

      <h1 class="header blue-text">LogIn</h1>

      <form>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="UserName_login" type="text" class="validate">
            <label for="UserName_login">User Name</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
             <i class="material-icons prefix">vpn_key</i>
            <input id="password_login" type="tel" class="validate">
            <label for="password_login">Password</label>
          </div> 
        </div>

        <button class="waves-effect waves-light btn" type="submit" name="submit_signUp">LogIn<i class="material-icons right">send</i></button>

      </form>
    </div>
  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>