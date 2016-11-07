<?php
session_start();
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title>Contact US</title>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <script>

      function submitQuery(frm){

        var firstName = frm.firstName.value;
        var surname = frm.surname.value;
        var email = frm.email.value;
        var title = document.getElementById("title").value;
        var emailVerify = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if((email == "" || !emailVerify.test(email)))
        {
          alert("The email address you have entered is invalid.")
        }else{

      if(firstName != "" && surname != "" && email != ""){
        if(title != "selectOne"){
          alert("Thank you, " + title + " " + firstName + " " +
          surname + ", for your input. We will respond to you shortly at " + email);
        }else{alert("Thank you, " + firstName + " " +
          surname + ", for your input. We will respond to you shortly at " + email);
        }
      }else{alert("You must fill in the required fields.");
    }
  }
  }

  function storeClientInfo(frm){

    localStorage.frstNm = frm.firstName.value;
    localStorage.srnm = frm.surname.value;
    localStorage.eml = frm.email.value;


  }

  function loadClientInfo() {

    if(localStorage.frstNm || localStorage.eml || localStorage.srnm ){
    document.getElementById("firstName").value = localStorage.frstNm;
    document.getElementById("surname").value = localStorage.srnm;
    document.getElementById("email").value = localStorage.eml;

    }
  }
    </script>
  </head>
  <body onLoad="loadClientInfo();">
    <div class="jumbotron">
      <div class="container text-left">
        <h1 class="opaqueTitle">Be at One</h1>
        <p>Mind, Body & Spirit</p>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
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
            <li ><a href="./HomePage.php">Home</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./courseListPageCW.php">Courses</a></li>

            <li><a href="./quizPageCW.php">Quiz</a></li>
            <li class="active"><a href="./contactPageCW.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a href="./RegistrationPageCW.php">Register</a></li>
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

    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <p class="bigTitle">Please contact us by email, and we will get back to you at the earliest convenience</p>
    <form>
        <p>Your Name</p>
        <label>Title</label><br>
        <select id="title">
          <option value="selectOne" >Select one</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
          <option value="Miss">Miss</option>
          <option value="Mr.">Mr.</option>
          <option value="Dr.">Dr.</option>
          <option value="other">other</option>
        </select>
          <br>
        <label for="firstName" id="firstName" required>First Name(s):<span class="asterisk">*</span></label><br>
          <input id="firstName" onChange="storeClientInfo(this.form);" name="firstName" type="text" size="60" placeholder="Please, enter your first name." autofocus required><br>

        <label for="surname" id="surname">Surname:<span class="asterisk">*</span></label><br>
          <input id="surname" onChange="storeClientInfo(this.form);" name="surname" type="text" size="60" placeholder="Please, enter your surname." required><br><br>

        <p>Contact Details</p>
        <label for"houseNumber">House Number:</label><br>
          <input id="houseNumber" type="text" size="60" placeholder="Please, enter your address."><br>

        <label for"streetName">Street Name:</label><br>
          <input id="streetName" type="text" size="60" ><br>

        <label for"city">Town/City:</label><br>
          <input id="city" type="text" size="60"><br>

        <label for"areaCode">Area Code:</label><br>
          <input id="areaCode" type="text" size="60" ><br>

        <label for="email" required>Email:<span class="asterisk">*</span></label><br>
          <input name="email" onChange="storeClientInfo(this.form);" id="email" type="email" size="60" placeholder="Please, enter e-mail address."  required><br>

        <label for="phone">Tel:</label><br>
          <input id="phone" type="tel" size="60" placeholder="Please, enter your telephone number."><br><br>

        <p>Let us know how we can help.</p>
        <textarea placeholder="Enter your query or comment here." rows="5" cols="60"></textarea>
        <br>
        <br>
        <br>
        </div>
    </div>
  </div>
      <div class="col-sm-2"></div>
      <button class="funButtons" value="submitQuery" type="submit" onClick="submitQuery(this.form); clearStored();" action="mailto:w1483905@my.westminster.ac.uk">Submit</button>
    </form>
    <br>
    <footer class="footer">The Wellness Institute Ltd.</footer>
  </body>
</html>
