let radio = document.querySelectorAll('input[type=radio]');
let button = document.getElementById("btn_Questions");

function verifRadio(json) {
    const obj = JSON.parse(json);
    var nbQuestion = document.getElementById('nbQuestion').value, radios,
        i, n, flag=true, flag_interne, num_question=0;
        console.log('test');
    for (i=1; i <= nbQuestion; i++) {
        radios=document.getElementsByName('question'+i);
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
    }
    if(!flag) {
        alert("Vous n'avez pas répondu à la question n°"+num_question);
        return false;
    }
    if(flag) {
        return true;
    }
}
