
function verifRadio(test){
    var radios;
    var wrongForm = false;
    var iterator = 1;
    var questions = [];
    var textAlert='';
    test.forEach(item => {
  radios = document.getElementsByName('question'+item);
        // console.log(test);
        var isChecked = false;
        for(n=0; n < radios.length; n++){
            if (radios[n].checked) {
              isChecked = true;
            }
          }
  if(!isChecked) {
    questions+=iterator;
    wrongForm = true;
  }
      iterator++;
    });
  if (wrongForm) {
    if(questions.length>1){
      textAlert="Vous n'avez pas répondu aux questions : ";
      for(i=0; i<questions.length-1; i++){
        textAlert+=questions[i]+',';
      }
      textAlert+=questions[i];
      } else {
        textAlert="Vous n'avez pas répondu à la question : "+questions[0];
      }
  alert(textAlert);
  console.log('false');
  return false;
  }else{
  return true;
  }

}

function clearAnswer(idAnswer){
  input=document.getElementById('answer'+idAnswer);
  input.value='';
}