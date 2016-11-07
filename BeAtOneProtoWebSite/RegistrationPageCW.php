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
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Register for a Course!</title>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <script>

      function validate(crs, frm){

        var firstName = frm.firstName.value;
        var surname = frm.surname.value;
        var email = frm.email.value;
        var emailVerify = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var code = frm.promoCode.value;

        if(email == ""){
        document.getElementById('e-mail').innerHTML = 'Please, enter your email address';
        document.regForm.email.focus();
      }else if(!email.match(emailVerify)){
        document.getElementById('e-mail').innerHTML = "Please, enter a valid email";
        document.regForm.email.focus();
      }else{
          document.getElementById('e-mail').innerHTML = '';
        }

        if(surname == ""){
        document.getElementById('surname').innerHTML = 'Please, enter your surname';
        document.regForm.surname.focus();
        } else{
        document.getElementById('lName').innerHTML = '';
        }

        if(firstName == ""){
        document.getElementById('fNameEmpty').innerHTML = 'Please, enter your name';
        document.regForm.firstName.focus();
        }else{
          document.getElementById('fNameEmpty').innerHTML = '';
        }

        if(crs == "Select One"){
        document.getElementById('courseEmpty').innerHTML = 'Please, select a course';
        document.regForm.course.focus();
        }else{
          document.getElementById('courseEmpty').innerHTML = '';
        }

        /*if((code != "bonus" || code != "Bonus") && code != "" ){
        document.getElementById('promoCode').innerHTML = 'Invalid code';
        document.regForm.promoCode.focus();
      }*/

        if((email == "" || !emailVerify.test(email))
         || surname == "" || firstName == "" || crs == "Select One"){
          return false;
        }else{
        document.forms["regForm"].submit();
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

    function clearStored(){
      localStorage.frstNm = "";
      localStorage.srnm = "";
      localStorage.eml = "";
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
      <div class="container-fluid" >
       <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#myNavbar" class="navbar-toggle">
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
              <li class="active"><a href="./RegistrationPageCW.php">Register</a></li>
              <li><a href="./testimonial.php">Write a Testimonial</a></li>
            <li><a href="./logOut.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>

            <?php
          }else{
            ?>
            <li><a href="./logIn.php" ><span class="glyphicon glyphicon-user"></span> Log in</a></li>
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

    <h1 class="bigTitle">Register for one of our courses</h1>
    <form name="regForm" action="./regPageCW.php" method="post">

      <fieldset>
        <legend>Course Details</legend>
          <label class="labelTitle">Course&nbsp;&nbsp;<span class="reqText" id="courseEmpty"></span><span class="asterisk">*</span></label>

          <select id="course" name="course">
            <option>Select One</option>
            <option>MBS406:Finding the Beauty Within</option>
            <option>MBS508:Peace and Tranquility of Mind</option>
            <option>MBS405:Meditation for Beginners</option>
            <option>MBS503:Intermediate Meditation</option>
            <option>MBS608:Advanced Meditation</otpion>
            <option>MBS609:Masterof Mind, Body and Spirit</option>
            <option>MBS711:Being at One With All</option>
          </select>
        <br>

        <label for="dateOfCourse" class="labelTitle">Date<span class="asterisk">*</span></label>
          <input id="dateOfCourse" name="date" type="date" placeholder="Choose a date"><br>
        <label for="promotion" class="labelTitle">Promotion Code&nbsp;<span id="promoCod"></span></label>
          <input id="promotion" type="text" name="promoCode" placeholder="Enter a promotion code"><span class="reqText" id="promoCode"></span>
      </fieldset>
        <br>
        <br>
      <fieldset>
        <legend>Applicant Details</legend>
        <label class="labelTitle">Title</label><br>
        <select id="title" name="title">
          <option value="selectOne" >Select one</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
          <option value="Miss">Miss</option>
          <option value="Mr.">Mr.</option>
          <option value="Dr.">Dr.</option>
          <option value="other">other</option>
        </select><br>

        <label for="firstName" class="labelTitle">First Name&nbsp;&nbsp;<span class="reqText" id="fNameEmpty"></span><span class="asterisk">*</span></label>
          <input id="firstName" onChange="storeClientInfo(this.form);" class="storeData" name="firstName" type="text" placeholder="Enter your first name" value=""><br>
        <label for="surname" class="labelTitle">Surname&nbsp;&nbsp;<span class="reqText" id="lName"></span><span class="asterisk">*</span></label>
          <input id="surname"  onChange="storeClientInfo(this.form);" class="storeData" name="surname" type="text" placeholder="Enter your last name" value=""><br>
        <label for="email" class="labelTitle">Email&nbsp;&nbsp;<span class="reqText" id="e-mail"></span><span class="asterisk">*</span></label>
          <input id="email" onChange="storeClientInfo(this.form);" class="storeData" name="email" type="email" placeholder="Enter your email address" value="">
      </fieldset>
      <br>
      <input class="funButtons" type="button" value="Confirm registration" onClick="validate(course.value, this.form); clearStored();">

    </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
    </div>
    <br>

    <hr>
    <footer class="footer">
    The Wellness Institute Ltd.
    </footer>
  </body>
</html>
