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

    input,textarea,select{
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
      <?php
      session_start();  

      if(isset($_SESSION["logged"]) && $_SESSION["logged"]!=TRUE)
      echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>';

      else{
        echo '<form method="POST"><li><button class="btn btn-danger" name="destroy" type="submit" style="margin-top:10%">Log Out</button></li></form>';
      }

      ?>

      </ul>
    </div>
  </div>
</nav>

<center>
    <div class="container" style="width:60%;border: 1px solid grey;padding-bottom: 0px">
        <h3>Review</h3><br>

        <form method="POST" action="review.php" enctype="multipart/form-data">
            <?php

            $conn = new mysqli("localhost","root","","bookit");

            if($conn->connect_error)
              die("Connection failed ".$conn->connect_error);

            $ret = "SELECT * FROM book";
            $result = $conn->query($ret);

            if($result->num_rows>0){
              echo '<input id="book_name" list="suggestions" name="book_name" placeholder="Book Name" required>
                  <datalist id="suggestions">';

              while($row = $result->fetch_assoc()){
                echo '
                <option value="'.$row["book_name"].'">
                ';
              }

              echo '</datalist><br><br>';
            }

            if($result->num_rows>0){
              echo '<input id="author" list="auth_suggestions" name="author" placeholder="Author" required>
                  <datalist id="auth_suggestions">';

              while($row = $result->fetch_assoc()){
                echo '
                <option value="'.$row["author"].'">
                ';
              }

              echo '</datalist><br><br>';
            }

            ?>

            <textarea name="review" placeholder="Write your review..." required></textarea><br><br>

            <input class="btn btn-success" type="submit" name="review_btn" value ="Post Review"><br><br>
        </form>
    </div>
</center>

</body>
</html>

<?php

    if(isset($_POST["review_btn"])){
      $conn = new mysqli("localhost","root","","bookit");

  if($conn->connect_error)
    die("Connection failed".$conn->connect_error);

  $username = $_SESSION["username"];
  print $username;
  $book_name = $_POST["book_name"];
  $author = $_POST["author"];
  $review = $_POST["review"];

  $insert = "INSERT INTO review (username,book_name,author,review) VALUES('$username','$book_name','$author','$review')";

  if(!$conn->query($insert)){
    echo "<script>alert('Error sending to database')</script>";
  }

  else
        header("location: index.php");

  }
?>
