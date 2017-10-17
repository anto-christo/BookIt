<?php
  session_start();
?>

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

<?php
  if(isset($_POST["more_info"])){

    $sell_id = $_POST["more_info"];
    $_SESSION["sell_id"] = $sell_id;

    $conn = new mysqli("localhost","root","","bookit");

    if($conn->connect_error)
      die("Connection failed ".$conn->connect_error);

    $ret = "SELECT * FROM book_data WHERE sell_id='$sell_id'";

    $result = $conn->query($ret);

    while($row = $result->fetch_assoc()){
      echo '
        <div class="container-fluid">
  <div class="col-md-3">
     <center>
     <img src="uploads/'.$row["image"].'" style="width:200px;height:200px"><br><br>
     </center>
  </div>

  <div class="col-md-9">
    <table class="table">
      <tr>
        <td><strong>Book Name</strong></td>
        <td>'.$row["book_name"].'</td>
      </tr>

      <tr>
        <td><strong>Author</strong></td>
        <td>'.$row["author"].'</td>
      </tr>

      <tr>
        <td><strong>Edition</strong></td>
        <td>'.$row["edition"].'</td>
      </tr>

      <tr>
        <td><strong>Department</strong></td>
        <td>'.$row["department"].'</td>
      </tr>

      <tr>
        <td><strong>Semester</strong></td>
        <td>'.$row["semester"].'</td>
      </tr>

      <tr>
        <td style="color: red"><h4><strong>Cost</strong></h4></td>
        <td style="color: red"><h4><strong>&#x20B9;'.$row["cost"].'</strong></h4></td>
      </tr>


    </table><br><br>

    <center>
    <button class="btn btn-primary" style="width: 100%">Buy Now</button><br><br>
    <a href="message.php"><button class="btn btn-warning" style="width: 100%">Contact Seller</button></a></center><br><br>
  </div>
</div>
      ';

      $book_name = $row["book_name"];
    }

    $rev = "SELECT * FROM review WHERE book_name='$book_name'";

    $res = $conn->query($rev);

    if($res->num_rows > 0){
      echo '<div class="container">';

      while($data = $res->fetch_assoc()){
        echo '
            <div class="row">
              <p>User:'.$data["username"].'</p>
              <p>Review:'.$data["review"].'</p>
            </div>
        ';
      }

      echo '</div>';
    }
  }
?>

</body>
</html>