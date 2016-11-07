<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Wellness Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <script src="logInUser.js"></script>
  </head>
  <body >
    <div class="jumbotron">
      <div class="container text-left">
        <h1 clas="opaqueTitle">Be at One</h1>
        <p>Mind, Body & Spirit</p>
      </div>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid" >
       <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="Logo.jpg" /></a>
        </div>
        <div class="navbar-collapse collapse " id="collapseNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./HomePage.php">Home</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./courseListPageCW.php">Courses</a></li>

            <li><a href="./quizPageCW.php">Quiz</a></li>
            <li><a href="./contactPageCW.php">Contact</a></li>
            <li><span id="menuOption"></span></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a href="./RegistrationPageCW.php">Register</a></li>
            <li class="active"><a href="./testimonial.php">Write a Testimonial</a></li>
            <li ><a href="./logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
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
    <section>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <form name="form2" action="validateTestimonial.php" method="post">
      <div class="text-center">
        <h1 class="bigTitle">Let us know what you think</h1>
        <input rows="10" columns="60" name="shareTestimonial" id="shareTestimonial" type="text">
      <br>
      <br>
      <br>
      <input class="funButtons" type="submit" name="submit" value="Submit">
      </div>
    </form>

  </div>
  <div class="col-sm-2"></div>
    <br>
    <br>
  </section>
    <!--<footer class="footer">
       The Wellness Institute Ltd.
    </footer>-->
  </body>
</html>
