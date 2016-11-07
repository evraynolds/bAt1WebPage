window.answerArray = [];
window.counter = 0;
var fullListOfQs = [];

$(document).ready(function(){

  window.totalQs = $('.question').size();
  window.nextQ = 0;
  window.$questions = $('.question');
  $questions.hide();

  $($questions.get(nextQ)).fadeIn();

$('.chooseAnswer').click(function() {

  $($questions.get(nextQ)).fadeOut(function(){

    nextQ += 1;
    multiple = secs + 15;
    $($questions.get(nextQ)).fadeIn();

      });
    });
  });
