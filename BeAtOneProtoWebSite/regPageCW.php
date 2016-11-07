<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-left">
        <h1>Be at One</h1>
        <p>Mind, Body & Spirit</p>
      </div>
    </div>

    <nav class="navbar navbar-inverse">

       <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="Logo.jpg" /></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./HomePage.php">Home</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./courseListPageCW.php">Courses</a></li>

            <li><a href="./quizPageCW.php">Quiz</a></li>
            <li><a href="./contactPageCW.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a class="active" href="./RegistrationPageCW.php">Register</a></li>
              <li><a href="./testimonial.php">Write a Testimonial</a></li>
            <li id="visibleLogIn"><a href="./logIn.php" action="logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
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
      <!--</div>-->
    </nav>

  <?php
  $course = $_REQUEST['course'];
  $firstName = $_REQUEST['firstName'];
  $surname = $_REQUEST['surname'];
  $email = $_REQUEST['email'];
  $title = $_REQUEST['title'];
  $date = $_REQUEST['date'];
  $code = $_REQUEST['promoCode'];
  $cost;
  $discount = 0.05;


if($course == "MBS406:Finding the Beauty Within"){
  $cost = 2500;
} elseif ($course == "MBS508:Peace and Tranquility of Mind"){
  $cost = 3250;
} elseif ($course == "MBS405:Meditation for Beginners"){
  $cost = 1200;
} elseif ($course == "MBS503:Intermediate Meditation"){
  $cost = 2000;
} elseif ($course == "MBS608:Advanced Meditation"){
  $cost = 4000;
} elseif ($course == "MBS609:Master of Mind, Body and Spirit"){
  $cost = 4250;
} elseif ($course == "MBS711:Being at One With All"){
  $cost = 5000;
}

if($code === "bonus"){
  $cost = $cost - ($cost* $discount);
}

if($title == "selectOne"){
  $title = "";
}
  echo "<p> Thank you, $title $firstName $surname, for registering for
     our course, $course. The total cost comes to $cost. We look forward to meeting you.</p>";
  ?>

  </body>
</html>
