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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img alt="Globetom Blog" src="images/logo.jpg" height="80px" /></a>
    </div>
  </nav>

  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center blue-text text-darken-5">Welcome</h1>

        <div class="row center">
          <i class="large material-icons prefix">play_for_work</i>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax">
      <img src="images/index.jpeg">
    </div>
  </div>

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

      <form method="POST" action="login.php">

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="username_login" name="username_login" type="text" class="validate">
            <label for="username_login">User Name</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
             <i class="material-icons prefix">vpn_key</i>
            <input id="password_login" name="password_login" type="password" class="validate">
            <label for="password_login">Password</label>
          </div> 
        </div>

        <button class="waves-effect waves-light btn" type="submit" name="submit_login">LogIn<i class="material-icons right">send</i></button>

      </form>
    </div>
  </div>

  <?php

    require('footer.html');
  ?>