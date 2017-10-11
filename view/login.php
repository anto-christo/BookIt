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
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    input{
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
      <a class="navbar-brand" href="index.php">BOOKIT</a>
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
    <div class="container" style="width:50%;border: 1px solid grey;padding:2%">
        <h3>Login</h3><br>

        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input class="btn btn-success" type="submit" name="login_btn" value="Login"><br><br>
        </form>
    </div>
</center>

</body>
</html>


<?php
  
  if(isset($_POST["login_btn"])){

    $conn = new mysqli("localhost","root","","bookit");

  if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT username,password FROM user_data WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
      session_start();

      $_SESSION["username"] = $username;
      $_SESSION["logged"] = TRUE;

       header("location:index.php");
       exit();
    }

    else{
      echo "<script>alert('Invalid username or password !')</script>";
    }

    $conn->close();
  }
?>