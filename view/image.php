<!DOCTYPE html>
<html lang="en">
<head>
  <title>BOOK IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
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
      <a class="navbar-brand" href="#">BOOK IT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">HOME</a></li>
          
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

      <?php
      
      session_start();

      if(isset($_SESSION["logged"]) && $_SESSION["logged"]!=TRUE)
      echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>';

      else{
        echo '<form method="POST"><li><button class="btn btn-danger" name="destroy" type="submit" style="margin-top:10%">Log Out</button></li></form>';
      }

      if(isset($_POST["destroy"])){
        $_SESSION["logged"] = FALSE;
        header("location: index.php");
        exit();
      }

      ?>

      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
 	<?php

	$conn = new mysqli("localhost","root","","bookit");

	$ret = "SELECT * FROM book_data";

	$result = $conn->query($ret);

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo '
				<div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">NEW PRODUCT</div>
        <div class="panel-body"><img src="uploads/'.$row["image"].'" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer">&#x20B9  <p><a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> BUY NOW
        </a></p></div>
      </div>
    </div>
			';
		}
	}
?>
  </div>
</div>

</body>
</html>