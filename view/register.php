<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
<style>
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }

    input,textarea{
        width:50%;
        padding: 12px 20px;
        box-sizing: border-box;
    }

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">BOOK IT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
          
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">COMPUTER SCIENCE</a></li>
          <li><a href="#">MECHANICAL</a></li>
          <li><a href="#">IT</a></li>
          <li><a href="#">EXTC</a></li>
        </ul>
      </li>
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>

      </ul>
    </div>
  </div>
</nav>

<center>
    <div class="container" style="width:60%;border: 1px solid grey;padding-bottom: 0px">
        <h3>Register</h3><br>

        <form method="POST" action="register.php">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <textarea name="address" placeholder="Full address" required></textarea><br><br>
            <input type="number" name="pincode" placeholder="Pincode" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="con_pass" placeholder="Confirm Password" required><br><br>
            <input class="btn btn-success" type="submit" name="reg_btn" value ="Register"><br><br>
        </form>
    </div>
</center>

</body>
</html>

<?php
  
    if(isset($_POST["reg_btn"])){
      $conn = new mysqli("localhost","root","","bookit");

  if($conn->connect_error)
    die("Connection failed".$conn->connect_error);

  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $pincode = $_POST["pincode"];
  $password = $_POST["password"];
  $con_pass = $_POST["con_pass"];

  $check_uname = "SELECT username FROM user_data WHERE username='$username'";
  $check_email = "SELECT email FROM user_data WHERE email='$email'";
  $register = "INSERT INTO user_data (name,username,email,address,pincode,password) VALUES('$name','$username','$email','$address','$pincode','$password')";

  $res_uname = $conn->query($check_uname);
  $res_email = $conn->query($check_email);


  if($con_pass == $password){

    if($res_uname->num_rows > 0){
      // echo '<div class="alert alert-primary" role="alert">
      //       Both the passwords don\'t match
      //       </div>';
      echo "<script>alert('Username already exists')</script>";
    }

    else{

      if($res_email->num_rows > 0)
      echo "<script>alert('Email Already Registered !')</script>";

      else{

        if($conn->query($register)){
          header("location: index.html");
        }
      }
    }
  }

  else{
    echo "<script>alert('Both the passwords don\'t match !')</script>";
  }
    }
?>