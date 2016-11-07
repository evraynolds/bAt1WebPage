  var answerArray = [];
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

  function timeFun() {

    secs += 1;
    document.getElementById('timer').value = secs.toString();

    if(nextQ == 8){
      clearInterval(this);
      document.getElementById("totalTime").innerHTML = ("It took you " +
      secs + " seconds to complete the quiz.");
      stopTimer();
    }

    if(secs == multiple){
      multiple = secs + 15;
        $($questions.get(nextQ)).fadeOut(function(){
          nextQ += 1;
          $($questions.get(nextQ)).fadeIn();
          counter++;
        });
      }
    }


  function stopTimer(){
    clearInterval(theTimer);
  }


  function selectAnswer(ans, frm){

      answerArray[nextQ] = ans;

      if(nextQ == 15){

        for(i = 0; i <= 15; i++){

          resultString +=  "Question " + (i+1) + ") " + questionArray[i] +".\n ";

          if(answerArray[i] == undefined || answerArray[i] == "" || answerArray[i] == "undefined"){
            resultString += "You did not answer, and therefore";
          }else{
           resultString += "You answered " + answerArray[i];
         }

          if(answerArray[i] === correctAnswer[i]){
            resultString += "...you answered correctly. \n\n";
            total++;
          }
          else{
            resultString += "..you answered incorrectly.\n You chose " + answerArray[i] + "." +
            " The correct answer is \"" + correctAnswer[i] + "\". \n\n";
          }
        }
            document.getElementById("results").innerHTML = resultString;
            document.getElementById("score").innerHTML = ("You scored " + total + "/8");
      }
      multiple = secs + 15;
  }
