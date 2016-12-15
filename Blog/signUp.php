<?php

    include("connect.php");

    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = hash('sha256', $password);
      
    $sql = "INSERT INTO Users (User_name, Email, Password) VALUES ('$username', '$email', '$password')";

    $result = mysqli_query($conn, $sql);

    header("location: index.php");

?>