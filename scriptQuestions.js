
function verifRadio(test){
  var radios;
  var wrongForm = false;
  var iterator = 1;
  test.forEach(item => {
 radios = document.getElementsByName('question'+item);
      console.log(test);
      var isChecked = false;
      for(n=0; n < radios.length; n++){
          if (radios[n].checked) {
            isChecked = true;
          }
        }
if(!isChecked) {
    alert("Vous n'avez pas répondu à la question n°"+iterator);
   wrongForm = true;
}
    iterator++;
  });
if (wrongForm) {
 return false;
}else{
 return true;
}

}
