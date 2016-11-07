<?php
session_start();
// If session is not registered redirect back to main page
if(!isset($_SESSION['user'])){
header('location: logIn.html');
exit();
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >

<title>Success!</title>
<script>


function ajaxFunction()
{
var xmlHttp;
if (window.XMLHttpRequest)
{   // code for modern browsers
xmlHttp=new XMLHttpRequest();
}
else
{   // code for IE6, IE5
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}

// Handle response from server
xmlHttp.onreadystatechange=function()
  {
     if(xmlHttp.readyState==4 && xmlHttp.status==200)
        {
          alert(it is working);
     document.getElementById("visibleLogIn").innerHTML="Log out";
        }
  }
// Send request to the server
//xmlHttp.open("GET","more.txt",true);
//xmlHttp.send(null);
}
</script>
  </head>
<body onLoad="ajaxFunction();">

    <div class="jumbotron">
      <div class="container text-left">
        <h1>Be at One</h1>
        <p>Mind, Body & Spirit</p>
      </div>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid" >
       <div class="navbar-header">
<!--Introduces button when page sized reduced-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="Logo.jpg" /></a>
        </div>
<!--Collapses navbar to single row when screen size is diminished. Id allows for a drop down nav list-->
        <div class="navbar-collapse collapse " id="collapseNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./HomePage.php">Home</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./courseListPageCW.php">Courses</a></li>
            <li><a href="./RegistrationPageCW.php">Register</a></li>
            <li><a href="./quizPageCW.php">Quiz</a></li>
            <li><a href="./contactPageCW.php">Contact</a></li>
            <li><span id="menuOption"></span></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a href="./testimonial.php">Write a testimonial</a></li>
            <li><a href="./logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>

            <?php
          }else{
            ?>
            <li><a href="./logIn.php" ><span class="glyphicon glyphicon-user"></span> Log in </a></li>
            <li><a href="./signUp.php">Sign up</a></li>
          <?php
        }
        ?>
          </ul>
        </div>
      </div>
    </nav>

          <h1>Login Successful<h1>
</body>
</html>
