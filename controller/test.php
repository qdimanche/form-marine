<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form onsubmit="return validateTheForm()" method="post" action="https://mail.google.com/mail/">
<br/>
<input type="text" id="txtInput" value=""/>
<input type="submit" value="search"/>
</form>

<?php

require_once dirname(__DIR__).'/controller/getAllQuestionIDs.php';
$listQuestionsIDs = json_encode($res);
//var_dump(($res));
// session_start();
// require 'auth.php';
// echo $_SESSION['login'];
?>





    <?php require dirname(__DIR__).'/header.php';?>
    <form onsubmit="return verifRadio(<?php echo $listQuestionsIDs ?>)" method="get" action="./controller/createResult.php" class="flex flex-col space-y-6 w-1/4 mx-auto pt-32 pb-16">


    <?php
    require_once dirname(__DIR__).'/controller/getAllQuestions.php';
    foreach ($res as $question):
    if($question !== $res["nbQuestion"]):?>
            <div class="flex flex-col space-y-2 ">
                <span><?php echo $question['name'] ?></span>

                <div class="flex space-x-2 ">
                    <input type="radio" id="response1<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>" value="1">
                    <label for="response1<?php echo $question['questionID'] ?>"><?php echo $question['answer1'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response2<?php echo $question['questionID'] ?>"  name="question<?php echo $question['questionID'] ?>" value="2">
                    <label for="response2<?php echo $question['questionID'] ?>"><?php echo $question['answer2'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response3<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>" value="3">
                    <label for="response3<?php echo $question['questionID'] ?>"><?php echo $question['answer3'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response4<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>" value="4">
                    <label for="response4<?php echo $question['questionID'] ?>"><?php echo $question['answer4'] ?></label>
                </div>

            </div>
          <?php else: ?> <input type="hidden" id="nbQuestion" name="nbQuestion" value="<?php echo $question ?>">
                  <?php endif; endforeach ;?>

        <button type="submit" id="btn_Questions" class="bg-[#3D5A80]/80 duration-300 hover:bg-[#3D5A80] text-white px-2 py-3 rounded-[10px] text-sm w-full !mt-6 w-1/4 items-center">Envoyer</button>


        <script>
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
        </script>




</body>
</html>
