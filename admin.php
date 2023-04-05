<?php

require 'connect.php';
// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
$nasi = $_POST['nasi'];
$lauk = $_POST['lauk'];
$specialdish = $_POST['specialdish'];
//$email = $_POST['email'];
//$numbertelephone = $_POST['numbertelephone'];
//$address = $_POST['address'];
 
$query = "INSERT INTO addmenu ( nasi, lauk, specialdish ) VALUES ('$nasi', '$lauk', '$specialdish' )";

$result = mysqli_query($conn, $query);
if ($result) {
        echo '<script type="text/javascript">
		window.onload = function () {alert("Add Menu Successfully.");}
		</script>';
    } else {
        echo "Add Menu Failed";
    }
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/Home/logo.png"/>
        <title>Catering Anjung Selera</title>

        <!-- Bootstrap core CSS -->
        <link href="fonts/oswald/stylesheet.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script> 
        <script src="js/custom.js" type="text/javascript"></script>
     <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: none;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
		


    </head>
    <body>
        <!--header--->
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 visible-xs">
                            <div class="logo-mobile">
                                <a href="home.html"><img src="images/Home/logo.png"/></a>
                            </div>
                        </div>
                        <div class="col-md-14 col-xs-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>
                            </div>
							
                            <div class="collapse navbar-collapse text-center" id="myNavbar">
                                <ul class="nav navbar-nav margin-l">
                                    <li class="active"><a href="admin.html">Add Menu Details</a></li>
                                    
                                    <li><a href="viewmenu.html">View Menu Details</a></li>
								 
                                </ul>
                                 <div class="logo hidden-xs">
                                    <a href="home.html"><img src="images/Home/logo.png" class=""/></a>
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                   
                                      <li><a href="viewcust.php">View Customer Details</a></li>
                                   <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">logout</a> 
                                    
                            <!--<a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>-->
                            <!--                                <div id="searchbar" class="clearfix">
                                                                <form id="searchform">
                                                                    <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                                                                    <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                                                                </form>
                                                            </div>-->

                        </div>
                    </div>
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
	

<div class="container">
  <h2> ADD MENU </h2>
  <form action="admin.php" method="POST">
    <div class="row">
      <div class="col-25">
       <label for="nasi">Nasi</label>
      </div>
      <div class="col-75">
        <textarea id="nasi" name="nasi" style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lauk">Lauk</label>
      </div>
      <div class="col-75">
        <textarea id="lauk" name="lauk" style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="specialdish">Special Dish</label>
      </div>
      <div class="col-75">
                <textarea id="specialdish" name="specialdish" style="height:100px"></textarea>

      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="Submit" onclick="myFunction()>
    </div>
  </form>
</div>

        <!--end-->
        <!--carousel--->
        
        <!--end--->

        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
    <script>
            $(function () {
                $('.pop').on('click', function () {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
        </script>
        <script>
// Get the modal
               var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
               window.onclick = function(event) {
               if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script>
function myFunction() {
  alert("User Created Successfully.");
}
</script>
    </body>
</html>
