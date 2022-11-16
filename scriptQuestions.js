
alert("Vous n'avez pas répondu à la question n°");
function verifRadio(string) {
    alert("Vous n'avez pas répondu à la question n°");
  console.log(string);
    var questionIDs = [1,2,3,4];
    const questions = questionsIDs;
    console.log("iaheguheaigae");
    questions.forEach(questionID =>verifQuestion(questionID));
}
function verifQuestion(questionID){
    radios=document.getElementsByName('question'+questionID);
        flag_interne=false;
        for(n=0; n < radios.length; n++){
            if (radios[n].checked) {
                flag_interne=true;
            }
        }
        if (!flag_interne) {
            flag=false;
            if(num_question==0){
                num_question=i;
            }
        }
    if(!flag) {
        alert("Vous n'avez pas répondu à la question n°"+num_question);
        return false;
    }
    if(flag) {
        //return true;
    }
}
