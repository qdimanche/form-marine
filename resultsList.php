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
require_once __DIR__ . '/controller/getAllResults.php';
?>

<div class="lg:mx-60 mx-20 pb-16 pt-32">
    <form>
        <?php
        require 'auth.php';
        $iterator = 1;
        if (count($res)>0):
        foreach ($res as $result): ?>
        
            <div class="flex flex-col">
                <div class="flex items-center justify-between py-8 border-b border-slate-200">
                    <span class="w-1/2">Résultat <?php echo $iterator ?></span>
                    <div class="flex space-x-4 w-1/2">
                        <span class="font-bold">Nombre de points :</span>
                        <span><?php echo $result?></span>
                    </div>
                </div>
            </div>
        <?php $iterator++; endforeach;  ?>
    </form>
    <form method="post" action="./controller/deleteAllResults.php">
        <button type="submit" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/5 mt-10">
            Supprimer les résultats
        </button>
    </form>
    <?php else:?>
        <div class="flex flex-col">
            <div class="flex items-center justify-between py-8 border-b border-slate-200">
                <span class="w-1/2">Il n'y a pas de résultats à afficher.</span>
            </div>
        </div>
    <?php endif;?>
</div>


</body>
</html>