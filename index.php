<?php

require_once __DIR__.'/controller/getAllQuestionIDs.php';
$listQuestionsIDs = json_encode($res);
//var_dump(($res));
// session_start();
// require 'auth.php';
// echo $_SESSION['login'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <?php require 'header.php'; ?>
    <form onsubmit="return verifRadio(<?php echo $listQuestionsIDs ?>)" method="post" action="./controller/createResult.php" class="flex flex-col space-y-6 w-1/4 mx-auto pt-32 pb-16">

    <?php
    require_once __DIR__.'/controller/getAllQuestions.php';
    $iterator = 1;
    foreach ($res as $question):
    if($question !== $res["nbQuestion"]):?>
            <div class="flex flex-col space-y-2 ">

                <div class="flex space-x-2">
                    <span>Q<?php echo $iterator?>:</span>
                    <span><?php echo $question['name']?></span>
                    <?php $iterator++ ?>
                </div>



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

<script src='script.js'></script>

</body>
</html>
