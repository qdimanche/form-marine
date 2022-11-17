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
    <form method="post" action="deleteResult.php">
        <?php foreach ($res as $result): ?>
            <div class="flex flex-col">
                <div class="flex items-center py-8 border-b border-slate-200">
                    <span class="w-4/5">Résultat <?php echo $result['resultID'] ?></span>
                    <div class="flex flex-col space-y-6">
                        <span class="font-bold">Nombre de points :</span>
                        <span><?php echo $result['average'] ?></span>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </form>
    <button type="submit"
            class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/5">
        Supprimer les résultats
    </button>
</div>


</body>
</html>