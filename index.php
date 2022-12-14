<?php

require_once __DIR__ . '/controller/getAllQuestionIDs.php';
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
<form method="post" action="./controller/createResult.php"
      class="flex flex-col w-1/2 mx-auto pt-32 pb-16">

    <?php
    require_once __DIR__ . '/controller/getAllQuestionsRandom.php';

    $iterator = 1;
    foreach ($res as $question):
        if ($question !== $res["nbQuestion"]):?>
            <div class="flex flex-col py-8 border-b border-slate-200">

                <div class="flex space-x-2 mb-6 font-bold">
                    <span>Q<?php echo $iterator ?>:</span>
                    <span><?php echo $question['name'] ?></span>
                    <?php $iterator++ ?>
                </div>


               <?php
               $listAnswer = [1,2,3,4];
            shuffle($listAnswer);
        foreach ($listAnswer as $answer): ?>
            
            <div class="flex space-x-2 mb-2">
                <input type="radio" id="response<?php echo $question['questionID'] ?> "
                       name="question<?php echo $question['questionID'] ?>" value="<?php echo $answer ?>" required>
                <label for="response<?php echo $answer.$question['questionID'] ?>"><?php echo $question['answer'.$answer] ?></label>
            </div>
        <?php endforeach; ?>

            </div>
        <?php else: ?> <input type="hidden" id="nbQuestion" name="nbQuestion" value="<?php echo $question ?>">
        <?php endif; endforeach; ?>

    <button type="submit" id="btn_Questions"
            class="bg-[#3D5A80]/80 duration-300 hover:bg-[#3D5A80] text-white px-2 py-3 rounded-[10px] text-sm w-full !mt-8 w-1/4 items-center">
        Envoyer
    </button>

    <script src='script.js'></script>

</body>
</html>
