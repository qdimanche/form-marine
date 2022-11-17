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
require 'auth.php';
require_once __DIR__.'/controller/getAllQuestions.php';
?>

    <div class="lg:mx-60 mx-20 pb-16 pt-32">

        <div class="flex justify-between items-center !mt-12 pb-6 mb-8 border-b border-slate-500">
            <span class="text-xl font-bold px-2 py-3 rounded-[10px] text-sm text-center">Liste des questions</span>
            <a href="admin.php" class="bg-[#3D5A80]/60 hover:bg-[#3D5A80]/70 duration-300 text-white text-center px-2 py-3 rounded-[10px] text-sm w-1/5">Ajouter une question</a>
        </div>

        <?php
        $iterator = 1;
        foreach ($res as $question):
          if($question !== $res["nbQuestion"]):  ?>
            <form method="post" action="editQuestion.php" class="space-y-6 flex flex-col ">
                <div class="flex flex-col">
                    <div class="flex items-center justify-between py-8 border-b border-slate-200">
                        <div class="flex space-x-2">
                            <span>Q<?php echo $iterator?>:</span>
                            <span><?php echo $question['name']?></span>
                            <?php $iterator++ ?>
                        </div>
                        <input type="hidden" name="numQuestion" value="<?php echo $question['questionID'] ?>">
                        <div class="space-x-6 flex w-1/5">
                            <button type="submit" name="delete" class="bg-[#3D5A80]/80 hover:bg-[#2b3f5a] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2">Modifier</button>
                            <button type="submit" name="modify" class="bg-[#293241]/80 duration-300 hover:bg-[#293241] text-white px-2 py-3 rounded-[10px] text-sm w-1/2">Supprimer</button>
                        </div>

                    </div>
                </div>
            </form>
        <?php endif; endforeach;?>
    </div>



</body>
</html>