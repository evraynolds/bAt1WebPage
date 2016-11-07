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
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-left">
        <h1 class="opaqueTitle">Be at One</h1>
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
            <li class="active"><a href="./HomePage.php">Home</a></li>
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
              <li><a href="./testimonial.php">Write a Testimonial</a></li>
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
      <div class="bigTitle">
        <h3>Our Mission</h3>
          <p>At the Wellness Institute, our ambition is to cleanse the world of
             negative energy beginning with the self. We are here to guide our
             pupils in developing peace of mind and inner tranquility. We
             believe in focused methods and rigorous self-examination sessions
             to bring about true enlightenment. We offer our services for the
             betterment of society and self. We are here to help guide you to
             a more peacefully and content coexistence. Won't you come and join
             us today?
          </p>
      </div>
      <br>
      <br>
      <div class="pics">
        <img  src="meditate.jpg">
        <img  src="warrior.jpg">
        <img   src="nature.jpg">
      </div>
    </section>
    <br>
    <br>

    <footer class="footer">
      <p>Copyright The Wellness Center Ltd.</p>
    </footer>
  </body>
</html>
