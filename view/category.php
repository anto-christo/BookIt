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

    .navbar-nav > li:hover > .dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}  
      .feedback {
  background-color : #BDBDBD;
  color: white;
  padding: 25px 20px;
  border-radius: 250px;
  border:none;
          /*border-color: #46b8da;*/
}

#mybutton {
  position: fixed;
  bottom: 40px;
    
  right: 10px;
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
                                            <a href="#">SEM 3</a>
                                            <a href="#">SEM 4</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 5</a>
                                            <a href="#">SEM 6</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 7</a>
                                            <a href="#">SEM 8</a>
                                            
                                            
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
                                            <a href="#">SEM 1</a>
                                            <a href="#">SEM 2</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 3</a>
                                            <a href="#">SEM 4</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 5</a>
                                            <a href="#">SEM 6</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 7</a>
                                            <a href="#">SEM 8</a>
                                            
                                            
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
                                            <a href="#">SEM 1</a>
                                            <a href="#">SEM 2</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 3</a>
                                            <a href="#">SEM 4</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 5</a>
                                            <a href="#">SEM 6</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 7</a>
                                            <a href="#">SEM 8</a>
                                            
                                            
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
                                            <a href="#">SEM 1</a>
                                            <a href="#">SEM 2</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECOND YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 3</a>
                                            <a href="#">SEM 4</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THIRD YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 5</a>
                                            <a href="#">SEM 6</a>
                                            
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOURTH YEAR</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">SEM 7</a>
                                            <a href="#">SEM 8</a>
                                            
                                            
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

<?php
    $conn = new mysqli("localhost","root","","bookit");

    if($conn->connect_error)
      die("Connection failed ".$conn->connect_error);

    $comp1 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='I'";
    $comp2 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='II'";
    $comp3 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='III'";
    $comp4 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='IV'";
    $comp5 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='V'";
    $comp6 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='VI'";
    $comp7 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='VII'";
    $comp8 = "SELECT * FROM book_data WHERE department='COMPUTER' AND semester='VIII'";

    $it1 = "SELECT * FROM book_data WHERE department='IT' AND semester='I'";
    $it2 = "SELECT * FROM book_data WHERE department='IT' AND semester='II'";
    $it3 = "SELECT * FROM book_data WHERE department='IT' AND semester='III'";
    $it4 = "SELECT * FROM book_data WHERE department='IT' AND semester='IV'";
    $it5 = "SELECT * FROM book_data WHERE department='IT' AND semester='V'";
    $it6 = "SELECT * FROM book_data WHERE department='IT' AND semester='VI'";
    $it7 = "SELECT * FROM book_data WHERE department='IT' AND semester='VII'";
    $it8 = "SELECT * FROM book_data WHERE department='IT' AND semester='VIII'";

    $extc1 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='I'";
    $extc2 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='II'";
    $extc3 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='III'";
    $extc4 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='IV'";
    $extc5 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='V'";
    $extc6 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='VI'";
    $extc7 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='VII'";
    $extc8 = "SELECT * FROM book_data WHERE department='EXTC' AND semester='VIII'";

    $mech1 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='I'";
    $mech2 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='II'";
    $mech3 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='III'";
    $mech4 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='IV'";
    $mech5 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='V'";
    $mech6 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='VI'";
    $mech7 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='VII'";
    $mech8 = "SELECT * FROM book_data WHERE department='Mechanical' AND semester='VIII'";

    if(isset($_POST["comp1"]))
        $res = $conn->query($comp1);
    if(isset($_POST["comp2"]))
        $res = $conn->query($comp2);
    if(isset($_POST["comp3"]))
        $res = $conn->query($comp3);
    if(isset($_POST["comp4"]))
        $res = $conn->query($comp4);
    if(isset($_POST["comp5"]))
        $res = $conn->query($comp5);
    if(isset($_POST["comp6"]))
        $res = $conn->query($comp6);
    if(isset($_POST["comp7"]))
        $res = $conn->query($comp7);
    if(isset($_POST["comp8"]))
        $res = $conn->query($comp8);



    if(isset($_POST["it1"]))
        $res = $conn->query($it1);
    if(isset($_POST["it2"]))
        $res = $conn->query($it2);
    if(isset($_POST["it3"]))
        $res = $conn->query($it3);
    if(isset($_POST["it4"]))
        $res = $conn->query($it4);
    if(isset($_POST["it5"]))
        $res = $conn->query($it5);
    if(isset($_POST["it6"]))
        $res = $conn->query($it6);
    if(isset($_POST["it7"]))
        $res = $conn->query($it7);
    if(isset($_POST["it8"]))
        $res = $conn->query($it8);


    if(isset($_POST["extc1"]))
        $res = $conn->query($extc1);
    if(isset($_POST["extc2"]))
        $res = $conn->query($extc2);
    if(isset($_POST["extc3"]))
        $res = $conn->query($extc3);
    if(isset($_POST["extc4"]))
        $res = $conn->query($extc4);
    if(isset($_POST["extc5"]))
        $res = $conn->query($extc5);
    if(isset($_POST["extc6"]))
        $res = $conn->query($extc6);
    if(isset($_POST["extc7"]))
        $res = $conn->query($extc7);
    if(isset($_POST["extc8"]))
        $res = $conn->query($ext8);


    if(isset($_POST["mech1"]))
        $res = $conn->query($mech1);
    if(isset($_POST["mech2"]))
        $res = $conn->query($mech2);
    if(isset($_POST["mech3"]))
        $res = $conn->query($mech3);
    if(isset($_POST["mech4"]))
        $res = $conn->query($mech4);
    if(isset($_POST["mech5"]))
        $res = $conn->query($mech5);
    if(isset($_POST["mech6"]))
        $res = $conn->query($mech6);
    if(isset($_POST["mech7"]))
        $res = $conn->query($mech7);
    if(isset($_POST["mech8"]))
        $res = $conn->query($mech8);


    if($res->num_rows > 0){
      echo '<form method="POST" action="buy.php">';
      while($row = $res->fetch_assoc()){
        echo '
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">LATEST ARRIVAL</div>
              <center>
                <div class="panel-body" style="width:50%;height:225px"><img src="uploads/'.$row["image"].'" style="width:200px;height:200px" class="img-responsive" alt="Image"></div></center>
              <div class="panel-footer">
              <strong><p>'.$row["book_name"].'</p>
              <p>&#x20B9;'.$row["cost"].'</p></strong>
              <button class="btn btn-primary" type="submit" name="more_info" value="'.$row["sell_id"].'">View More</button>
              </div>
            </div>
          </div>
        ';
      }
      echo '</form>';
    }

?>

</body>
</html>