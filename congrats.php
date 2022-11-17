<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<?php require 'header.php'; ?>


<div class="flex flex-col justify-center min-h-screen w-1/3 mx-auto">
  <div class="flex items-center pb-6 border-b border-slate-500">
      <img src="assets/images/trophy.jpg" class="w-[100px]" alt="">
      <div class="flex flex-col">
          <span class="text-[#FFBE1E] font-bold text-xl"><?php echo $_POST['total']." points"?></span>
          <p><?php echo $_POST['content']?></p>
      </div>
  </div>

  <div class="w-full flex justify-between items-center py-6 border-b border-slate-200">
      <div class="flex flex-col">
          <span>Toutes catégories confondues</span>
          <p>Nombre bonne réponses</p>
      </div>
      <div>
          51 pts
      </div>

  </div>

</div>

</body>
</html>
