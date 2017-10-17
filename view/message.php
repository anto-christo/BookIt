<?php
  session_start();
?>

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
      <a class="navbar-brand" href="#">BOOK IT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">HOME</a></li>
          
        
          <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORIES <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                       
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">COMPUTER SCIENCE</a>
                            <ul class="dropdown-menu">
                                
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIRST YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="comp1" value="SEM 1" style="border: 0px;background-color: white">
                                            <input type="submit" name="comp2" value="SEM 2" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="comp3" value="SEM 3" style="border: 0px;background-color: white">
                                            <input type="submit" name="comp4" value="SEM 4" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="comp5" value="SEM 5" style="border: 0px;background-color: white">
                                            <input type="submit" name="comp6" value="SEM 6" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="comp7" value="SEM 7" style="border: 0px;background-color: white">
                                            <input type="submit" name="comp8" value="SEM 8" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION TECHNOLOGY</a>
                            <ul class="dropdown-menu">
                                
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIRST YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="it1" value="SEM 1" style="border: 0px;background-color: white">
                                            <input type="submit" name="it2" value="SEM 2" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="it3" value="SEM 3" style="border: 0px;background-color: white">
                                            <input type="submit" name="it4" value="SEM 4" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="it5" value="SEM 5" style="border: 0px;background-color: white">
                                            <input type="submit" name="it6" value="SEM 6" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="it7" value="SEM 7" style="border: 0px;background-color: white">
                                            <input type="submit" name="it8" value="SEM 8" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">EXTC</a>
                            <ul class="dropdown-menu">
                                
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIRST YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="extc1" value="SEM 1" style="border: 0px;background-color: white">
                                            <input type="submit" name="extc2" value="SEM 2" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="extc3" value="SEM 3" style="border: 0px;background-color: white">
                                            <input type="submit" name="extc4" value="SEM 4" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name=extct5" value="SEM 5" style="border: 0px;background-color: white">
                                            <input type="submit" name=extct6" value="SEM 6" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name=extct7" value="SEM 7" style="border: 0px;background-color: white">
                                            <input type="submit" name=extct8" value="SEM 8" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MECHANICAL</a>
                            <ul class="dropdown-menu">
                                
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIRST YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="mech1" value="SEM 1" style="border: 0px;background-color: white">
                                            <input type="submit" name="mech2" value="SEM 2" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="mech3" value="SEM 3" style="border: 0px;background-color: white">
                                            <input type="submit" name="mech4" value="SEM 4" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="mech5" value="SEM 5" style="border: 0px;background-color: white">
                                            <input type="submit" name="mech6" value="SEM 6" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                        <form method="POST" action="category.php">
                                            <input type="submit" name="mech7" value="SEM 7" style="border: 0px;background-color: white">
                                            <input type="submit" name="mech8" value="SEM 8" style="border: 0px;background-color: white">
                                        </form>  
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
      </ul>

      <form class="navbar-form navbar-left" method="POST" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="keyword">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="search">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

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

        echo '<script>window.location.replace("index.php")</script>';
        exit();
      }

?>

      </ul>
    </div>
  </div>
</nav>
<center>
    <div class="container" style="width:50%;border: 1px solid grey;padding:2%">
        <h3>Message Center</h3><br>

        <form method="POST" action="message.php">
            <input type="text" name="subject" placeholder="Subject" required><br><br>
            <textarea name="message" placeholder="Type your message here!" style="height: 300px"></textarea><br><br>
            <input class="btn btn-success" type="submit" name="msg_btn" value="Send Message"><br><br>
        </form>
    </div>
</center>

</body>
</html>


<?php
  
  if(isset($_POST["msg_btn"])){

    $conn = new mysqli("localhost","root","","bookit");

  if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sell_id = $_SESSION["sell_id"];

    $user = "SELECT * FROM book_data WHERE sell_id='$sell_id'";

    $user_res = $conn->query($user);

    while($row = $user_res->fetch_assoc()){
      $seller = $row["username"];
      $book_name = $row["book_name"];
      $image = $row["image"];
    }

    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $buyer = $_SESSION["username"];

    print $buyer;

    $insert = "INSERT INTO contact(sell_id,book_name,image,buyer,seller,subject,question) VALUES('$sell_id','$book_name','$image','$buyer','$seller','$subject','$message')";

    if($conn->query($insert))
      echo '<script>alert("Message Sent Successfully!")</script>';

    else
      echo '<script>alert("Message not send!")</script>';

    $conn->close();
  }
?>