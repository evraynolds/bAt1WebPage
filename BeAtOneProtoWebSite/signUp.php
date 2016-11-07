<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <title>Sign up</title>
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

          <li id="visibleLogIn"><a href="./logIn.php" action="logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>

          <?php
        }else{
          ?>
          <li><a href="./logIn.php" ><span class="glyphicon glyphicon-user"></span> Log in </a></li>
          <li class="active"><a href="./signUp.php">Sign up</a></li>
        <?php
      }
      ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <h1 class="opaqueTitle">Sign up</h1>
  <form name="form1" method="post" action="runOnce.php" autocomplete="off">
  <table>
  <tr>
    <td width="78">First Name</td>
    <td width="294"><input name="fName" type="text" id="fName"></td>
  </tr>
  <tr>
    <td width="78">Surname</td>
    <td width="294"><input name="lName" type="text" id="lName"></td>
  </tr>
  <tr>
    <td width="78">Username</td>
    <td width="294"><input name="myusername" type="text" id="myusername"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="mypassword" type="password" id="mypassword"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input class="funButtons" type="submit" name="Submit" value="Register"></td>
  </tr>
  </table>
  </form>
</div>
  <div class="col-sm-2"></div>
  <!--<footer class="footer">The Wellness Institute Ltd.</footer>-->
  </body>
</html>
