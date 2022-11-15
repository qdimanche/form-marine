<?php
require_once __DIR__.'/controller/getAllQuestions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="absolute top-8 flex justify-between w-full px-8 items-center">
        <a href="index.php"><img src="assets/images/home.png" class="w-6" alt=""></a>
        <div class="space-x-2">
            <a href="admin.php" class="bg-[#EE6C4D]/80 duration-300 hover:bg-[#EE6C4D] text-white px-2 py-3 rounded-[10px] text-sm">Administration</a>
            <a href="loginForm.php" class="bg-[#293241]/80 duration-300 hover:bg-[#293241] text-white px-2 py-3 rounded-[10px] text-sm">Se connecter</a>
        </div>
    </div>




    <form method="post" action="" class="flex flex-col space-y-6 w-1/4 mx-auto pt-32 pb-16">
    <?php

    foreach ($res as $question):
    if($question !== $res["nbQuestion"]):?>
            <div class="flex flex-col space-y-2 ">
                <span><?php echo $question['name'] ?></span>
    
                <div class="flex space-x-2 ">
                    <input type="radio" id="response1<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>">
                    <label for="response1<?php echo $question['questionID'] ?>"><?php echo $question['answer1'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response2<?php echo $question['questionID'] ?>"  name="question<?php echo $question['questionID'] ?>">
                    <label for="response2<?php echo $question['questionID'] ?>"><?php echo $question['answer2'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response3<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>">
                    <label for="response3<?php echo $question['questionID'] ?>"><?php echo $question['answer3'] ?></label>
                </div>
                <div class="flex space-x-2">
                    <input type="radio" id="response4<?php echo $question['questionID'] ?>" name="question<?php echo $question['questionID'] ?>">
                    <label for="response4<?php echo $question['questionID'] ?>"><?php echo $question['answer4'] ?></label>
                </div>
            </div>
            <?php endif; endforeach ;?>

        <button type="submit" class="bg-[#3D5A80]/80 duration-300 hover:bg-[#3D5A80] text-white px-2 py-3 rounded-[10px] text-sm w-full !mt-6 w-1/4 items-center">Envoyer</button>

    </form>






</body>
</html>