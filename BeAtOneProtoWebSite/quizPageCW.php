<?php
session_start();
?>
<!DoCTYPE html>
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
    <title>Quiz!</title>
    <link rel="stylesheet" type="text/css" href="./styleSheetWebDevCW.css" >
    <script src="quizJQuery.js"></script>
    <script>  var answerArray = [];
      var questionArray = ["To what does 'spirituality' refer", "How many noble truths are there?",
      "What is the goal of meditation?", "What is the best way to meditate?", "What is nirvana?", "What is karma?",
      "What is the most effect breathing technique?", "What is the number one cause of stress?"];
      var correctAnswer = ["An insatiable desire that we all possess, and how we cope with it", "4", "All of the above",
      "Whichever method works best for the individual", "A transcendent state in which there is neither suffering nor desire",
      "The total of one's actions in this and all previous lives", "Diaphragmatic breathing","Work"];
      var counter = 0;
      var resultString = "";
      var total = 0;
      var br = document.createElement('br');
      var secs = 0;
      multiple = 15;
      var theTimer = setInterval(function(){ timeFun() }, 1000);

      function timeFun(){
        secs += 1;

        if(secs == multiple){
          multiple = secs + 15;
            $($questions.get(nextQ)).fadeOut(function(){
              nextQ += 1;

              $($questions.get(nextQ)).fadeIn();
              counter++;
              if(nextQ == 8){
                nextQ -= 1;
              selectAnswer(undefined, undefined);
              }
            });
          }
        }

      function selectAnswer(ans, frm){

          answerArray[nextQ] = ans;

          if(nextQ == 7){

            for(i = 0; i <= 7; i++){

              resultString +=  "Question " + (i+1) + ") " + questionArray[i] +".\n ";

              if(answerArray[i] == undefined || answerArray[i] == "" || answerArray[i] == "undefined"){
                resultString += "You did not answer, and therefore";
              }else{
               resultString += "You answered \"" + answerArray[i] + "\"";
             }

              if(answerArray[i] === correctAnswer[i]){
                resultString += "...you answered correctly. \n\n";
                total++;
              }
              else{
                resultString += "..you answered incorrectly.\n" +
                " The correct answer is \"" + correctAnswer[i] + "\". \n\n";
              }
            }
                document.getElementById("results").innerHTML = resultString;
                document.getElementById("score").innerHTML = ("You scored " + total + "/8");
                clearInterval(this);
                document.getElementById("totalTime").innerHTML = ("It took you " +
                secs + " seconds to complete the quiz.");
                stopTimer();
        }
          multiple = secs + 15;
      }

      function stopTimer(){
        clearInterval(theTimer);

      }
 </script>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container text-left">
        <h1 class="opaqueTitle">Be at One</h1>
        <p>Mind, Body & Spirit</p>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
       <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="Logo.jpg" /></a>
        </div>

        <div class="navbar-collapse collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./HomePage.php">Home</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./courseListPageCW.php">Courses</a></li>

            <li class="active"><a href="./quizPageCW.php">Quiz</a></li>
            <li><a href="./contactPageCW.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
            if ($_SESSION['user'] == 1)
              {
              ?>
              <li><a href="./RegistrationPageCW.php">Register</a></li>
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
      </div>
    </nav>
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2"></div>

      <div class="col-sm-8">

        <h1 class="bigTitle">Take a sample quiz relating to one of our sessions</h1>
          <p id="totalTime">You have 15 seconds for each question</p>
          <h2 id="score"></h2>
        <form>
          <ul class="quiz">
            <div class="question">
            <h2 class="allQuests">To what does "spirituality" refer?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans1a.value, this.form);" id="ans1a" type="button" name="ans1" value="A religious belief">
              <input class="chooseAnswer" onClick="selectAnswer(ans1b.value, this.form);" id="ans1b" type="button" name="ans1" value="An insatiable desire that we all possess, and how we cope with it">
              <input class="chooseAnswer" onClick="selectAnswer(ans1c.value, this.form);" id="ans1c" type="button" name="ans1" value="A feeling of connection for with things and poeple around you">
              <input class="chooseAnswer" onClick="selectAnswer(ans1d.value, this.form);" id="ans1d" type="button" name="ans1" value="An etheral being that has transcended this plain of existance into that which we refer to as nirvana">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">How many noble truths are there?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans2a.value, this.form);" id="ans2a" type="button" name="ans2" value="7">
              <input class="chooseAnswer" onClick="selectAnswer(ans2b.value, this.form);" id="ans2b" type="button" name="ans2" value="2">
              <input class="chooseAnswer" onClick="selectAnswer(ans2c.value, this.form);" id="ans2c" type="button" name="ans2" value="5">
              <input class="chooseAnswer" onClick="selectAnswer(ans2d.value, this.form);" id="ans2d" type="button" name="ans2" value="4">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">What is the goal of meditation?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans3a.value, this.form);" id="ans3a" type="button" name="ans3" value="To empty the mind of all distractions">
              <input class="chooseAnswer" onClick="selectAnswer(ans3b.value, this.form);" id="ans3b" type="button" name="ans3" value="To obtain a level of self-awareness">
              <input class="chooseAnswer" onClick="selectAnswer(ans3c.value, this.form);" id="ans3c" type="button" name="ans3" value="To explore beyond the depths of habituated thinking">
              <input class="chooseAnswer" onClick="selectAnswer(ans3d.value, this.form);" id="ans3d" type="button" name="ans3" value="All of the above">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">What is the best way to meditate?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans4a.value, this.form);" id="ans4a" type="button" name="ans4" value="Sitting cross-legged with your eyes closed">
              <input class="chooseAnswer" onClick="selectAnswer(ans4b.value, this.form);" id="ans4b" type="button" name="ans4" value="Lying down with your face to the ground">
              <input class="chooseAnswer" onClick="selectAnswer(ans4c.value, this.form);" id="ans4c" type="button" name="ans4" value="Standing on one leg with your arms outstretched">
              <input class="chooseAnswer" onClick="selectAnswer(ans4d.value, this.form);" id="ans4d" type="button" name="ans4" value="Whichever method works best for the individual">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">What is Nirvana?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans5a.value, this.form);" id="ans5a" type="button" name="ans5" value="Heaven">
              <input class="chooseAnswer" onClick="selectAnswer(ans5b.value, this.form);" id="ans5b" type="button" name="ans5" value="A '80's grunge rock band">
              <input class="chooseAnswer" onClick="selectAnswer(ans5c.value, this.form);" id="ans5c" type="button" name="ans5" value="Paradise">
              <input class="chooseAnswer" onClick="selectAnswer(ans5d.value, this.form);" id="ans5d" type="button" name="ans5" value="A transcendent state in which there is neither suffering nor desire">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">What is karma?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans6a.value, this.form);" id="ans6a" type="button" name="ans6" value="A tasty gooey substance used in candy bars">
              <input class="chooseAnswer" onClick="selectAnswer(ans6b.value, this.form);" id="ans6b" type="button" name="ans6" value="One's moral standing with their god">
              <input class="chooseAnswer" onClick="selectAnswer(ans6c.value, this.form);" id="ans6c" type="button" name="ans6" value="The total of one's actions in this and all previous lives">
              <input class="chooseAnswer" onClick="selectAnswer(ans6d.value, this.form);" id="ans6d" type="button" name="ans6" value="The natural order of things that would happen anyway">
            </li>
          </div>
        </form>
          <form>
          <div class="question">
            <h2 class="allQuests">What is the most effective breathing technique?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans7a.value, this.form);" id="ans7a" type="button" name="ans7" value="From the upper chest">
              <input class="chooseAnswer" onClick="selectAnswer(ans7b.value, this.form);" id="ans7b" type="button" name="ans7" value="Diaphragmatic breathing">
              <input class="chooseAnswer" onClick="selectAnswer(ans7c.value, this.form);" id="ans7c" type="button" name="ans7" value="From the belly">
              <input class="chooseAnswer" onClick="selectAnswer(ans7d.value, this.form);" id="ans7d" type="button" name="ans7" value="Abdominal breathing">
            </li>
          </div>
        </form>
        <form>
          <div class="question">
            <h2 class="allQuests">What is the number one cause of stress?</h2>
            <li>
              <input class="chooseAnswer" onClick="selectAnswer(ans8a.value, this.form); stopTimer();" id="ans8a" type="button" name="ans8" value="Work">
              <input class="chooseAnswer" onClick="selectAnswer(ans8b.value, this.form); stopTimer();" id="ans8b" type="button" name="ans8" value="Money">
              <input class="chooseAnswer" onClick="selectAnswer(ans8c.value, this.form); stopTimer();" id="ans8c" type="button" name="ans8" value="Relationships">
              <input class="chooseAnswer" onClick="selectAnswer(ans8d.value, this.form); stopTimer();" id="ans8d" type="button" name="ans8" value="poor nutrition">
            </li>
          </div>
          </form>
          <textarea id="results" style="height:500px" readonly></textarea>
          <hr>
      </div>
      <div class="col-sm-2"></div>
  </body>
</html>
