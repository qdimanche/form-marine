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
require_once __DIR__.'/controller/getAllGraduations.php';
?>

    <div class="lg:mx-60 mx-20 pb-16 pt-32">
        <div class="flex justify-between items-center !mt-12 pb-6 mb-8 border-b border-slate-500">
            <span class="text-xl font-bold px-2 py-3 rounded-[10px] text-sm text-center">Liste des appréciations</span>
        </div>

        <?php
        $iterator = 0;
        foreach ($res as $bareme):?>
                <div class="flex flex-col">
                    <div class="flex font-bold pt-4">
                            <span>De <?php echo $bareme[1].' à '.$bareme[2]?> points :</span>
                    </div>
                    <div class="flex items-center justify-between pb-8 pt-2 border-b border-slate-200">
                        
                        <div class="flex space-x-2">
                            <span><?php echo $bareme[3]?></span>
                        </div>
                        <div class="space-x-6 flex w-1/5">
                            <form method="post" action="editGraduation.php" class="flex flex-col w-1/2 ">
                                <input type="hidden" name="numBareme" value="<?php echo $iterator; $iterator++ ?>"><button type="submit" name="modify" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm ">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </div>

</body>
</html>