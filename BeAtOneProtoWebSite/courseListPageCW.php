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
    <title>Course List</title>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-left">
        <h1 class=opaqueTitle>Be at One</h1>
        <p >Mind, Body & Spirit</p>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid" >
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
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li class="active"><a href="./courseListPageCW.php">Courses</a></li>

            <li><a href="quizPageCW.php">Quiz</a></li>
            <li><a href="contactPageCW.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a href="RegistrationPageCW.php">Register</a></li>
              <li><a href="testimonial.php">Write a Testimonial</a></li>

            <li id="visibleLogIn"><a href="./logIn.php" action="logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>

            <?php
          }else{
            ?>
            <li><a href="logIn.php" ><span class="glyphicon glyphicon-user"></span> Log in </a></li>
            <li><a href="signUp.php">Sign up</a></li>
          <?php
        }
        ?>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="bigTitle" >View our List of Courses</h1><br>
    <table class="center" >
      <tr>
        <th>Course</th>
        <th>Code</th>
        <th>Descritpion</th>
        <th>Cost</th>
        <th>Dates</th>
      </tr>
      <tr>
        <td>Finding the Beauty Within</td>
        <td>MBS406</td>
        <td>We all possess an inner beauty attainable through self-reflection
        and outward positivity.  In this session, we will guide you in discovering
        your inner beauty that can be projected outwards, leading to a love and
        acceptance all percieved flaws.</td>
        <td>$2,500</td>
        <td>11/11/16</td>
      </tr>
      <tr>
        <td>Peace and Tranquility of Mind</td>
        <td>MBS508</td>
        <td>Distraction of the mind leave us lost and without a clear path forward.
        In this session we will examine how to best to free ourselves from
        thoughts of things for which we have no control. Our goal is to teach one
        how best to manage expectations and abilities so that one can be
        free from harmful and destructive ideas</td>
        <td>$3,250</td>
        <td>12/3/16</td>
      </tr>
      <tr>
        <td>Meditation for Beginners</td>
        <td>MBS405</td>
        <td>Our renowned mediations session begins with our course for beginners
        where we learn about the principles and techniques of meditation.  We
        guide our pupils in meditation session in which we discuss the best ways
        to clear ones mind and focus on the present moment.</td>
        <td>$1,200</td>
        <td>01/08/16</td>
      </tr>
      <tr>
        <td>Intermediate Meditation</td>
        <td>MBS503</td>
        <td>In this session, we build upon the practices learned in our beginner
        course, and we develop the ideas to incorporate mindful thinking.  We
        meditate regularly during these sessions as we focus our energies on our
        mind and how to be the best person we can be, ever aware of the present.
        </td>
        <td>$2,000</td>
        <td>11/08/16</td>
      </tr>
      <tr>
        <td>Advanced Meditation</td>
        <td>MBS608</td>
        <td>Our Advanced Meditation sessions focus on the body as well as the mind.
        We develop our meditation techniques in order to better understand and
        control our emotions. Pupils in these sessions have been known to become
        so very much at one in the present moment that they can even slow the beating
        of their heart and raise or lower their body temperature.  With great focus and
        mindfulness, all things are possible.</td>
        <td>$4,000</td>
        <td>22/08/16</td>
      </tr>
      <tr>
        <td>Master of Mind, Body and Spirit</td>
        <td>MBS609</td>
        <td>Here, we lead our pupils to mastery of the mind, body and spirit.
        This encompasses acknowledgment and awareness of the energy surrounding
        the individual at all times, both from others and from the self.  A certain
        control of ones emotions and thoughts will be harnessed so as to best
        represent the peaceful and empathetic nature in which we should all live.</td>
        <td>$4,250</td>
        <td>24/12/16</td>
      </tr>
      <tr>
        <td>Being at One With All</td>
        <td>MBS711</td>
        <td>We are reborn in the light.  Rays of warmth flow across us.  We feel
        and exude an energy like no other.  Harmony between the self and all
        living things fills our spirit with a stoic wisdom.  Compassion and love
        are our gifts.  We feel everything, the good, the bad, the beauty in finality.
        We are one, we are at peace. Oh yeah, and we can move things with our mind!</td>
        <td>$5,000</td>
        <td>15/03/17</td>
      </tr>
    </table>
    <hr>
  <footer class="footer">The Wellness Institute Ltd.</footer>
  </body>
</html>
