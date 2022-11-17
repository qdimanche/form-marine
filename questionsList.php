<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php require 'header.php';
require_once __DIR__.'/controller/getAllQuestions.php';
?>

    <div class="lg:mx-60 mx-20 pb-16 pt-32">

        <div class="flex space-x-6 !mt-12">
            <a href="questionsList.php" class="bg-[#3D5A80]/60 hover:bg-[#3D5A80]/70 duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2 text-center">Liste des questions</a>
        </div>

        <?php foreach ($res as $question):
          if($question !== $res["nbQuestion"]):  ?>
            <form method="post" action="editQuestion.php" class="space-y-6 flex flex-col ">
                <div class="flex flex-col">
                    <div class="flex items-center py-8 border-b border-slate-200">
                        <span class="w-4/5"><?php echo $question['name']?></span>
                        <input type="hidden" name="numQuestion" value="<?php echo $question['questionID'] ?>">
                        <button type="submit" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/5">Modifier</button>
                    </div>
                </div>
            </form>
        <?php endif; endforeach;?>
    </div>



</body>
</html>