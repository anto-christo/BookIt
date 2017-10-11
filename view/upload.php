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

      if(session_status())
      echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>';

      else{
        echo '<li><a href="index.php"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>';
      }

      ?>

      </ul>
    </div>
  </div>
</nav>

<center>
    <div class="container" style="width:60%;border: 1px solid grey;padding-bottom: 0px">
        <h3>Sell</h3><br>

        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="text" name="book_name" placeholder="Book Name" required><br><br>
            <input type="text" name="author" placeholder="Author" required><br><br>
            <input type="text" name="edition" placeholder="Edition" required><br><br>
            
            <select name="department">
              <option>Computer</option>
              <option>EXTC</option>
              <option>Mechanical</option>
              <option>IT</option>
            </select><br><br>

            <select name="semester">
              <option>I</option>
              <option>II</option>
              <option>III</option>
              <option>IV</option>
              <option>V</option>
              <option>VI</option>
              <option>VII</option>
              <option>VIII</option>
            </select><br><br>

            <div style="border:1px solid grey;width:50%">
            Select Image:<input type="file" name="fileToUpload" id="fileToUpload"></div><br>

            <input class="btn btn-success" type="submit" name="upload_btn" value ="Sell"><br><br>
        </form>
    </div>
</center>

</body>
</html>

<?php
  
    if(isset($_POST["upload_btn"])){
      $conn = new mysqli("localhost","root","","bookit");

  if($conn->connect_error)
    die("Connection failed".$conn->connect_error);

  $booh_name = $_POST["book_name"];
  $author = $_POST["author"];
  $edition = $_POST["edition"];
  $department = $_POST["department"];
  $semester = $_POST["semester"];

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
         $uploadOk = 0;
      }

      if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    }
  }
?>
