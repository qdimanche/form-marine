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

require_once './controller/getAllGraduations.php';
// var_dump($_POST);
?>




<form method="post" class="space-y-6 flex flex-col lg:mx-60 mx-20 pt-32 pb-16  ">
  <div class="flex space-x-4 pb-10 border-b border-slate-200">
    <div class="flex flex-col space-y-2 w-full">
      <label for="question">Modifier l'appréciation</label>
      <input name="nameBareme" id="question" type="text" value="<?php echo $res[$_POST['numBareme']][3]?>" required>
      <input type="hidden" name="id" value="<?php echo $res[$_POST['numBareme']][0]; ?>">

    </div>
  </div>


    <div class="flex space-x-6 !mt-12">
        <a href="graduations.php"
           class="bg-[#3D5A80]/60 hover:bg-[#3D5A80]/70 duration-300 text-white px-2 py-3 text-center rounded-[10px] text-sm w-1/2">Retour</a>
        <button type="submit" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2">
            Modifier appréciation
        </button>

    </div>
</form>


<script src='script.js'></script>


</body>
</html>