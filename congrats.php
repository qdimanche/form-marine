<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
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


<div class="flex flex-col justify-center min-h-screen w-1/3 mx-auto">
  <div class="flex items-center pb-6 border-b border-slate-500">
      <img src="assets/images/trophy.jpg" class="w-[100px]" alt="">
      <div class="flex flex-col">
          <span class="text-[#FFBE1E] font-bold text-xl">5000 points</span>
          <p>Félicitations vous êtes dans la moyenne</p>
      </div>
  </div>

  <div class="w-full flex justify-between items-center py-6 border-b border-slate-200">
      <div class="flex flex-col">
          <span>Catégorie 1</span>
          <p>Nombre bonne réponses</p>
      </div>
      <div>
          41 pts
      </div>

  </div>


    <div class="w-full flex justify-between items-center py-6 border-b border-slate-200">
        <div class="flex flex-col">
            <span>Catégorie 2</span>
            <p>Nombre bonne réponses</p>
        </div>
        <div>
            41 pts
        </div>

    </div>



</div>

</body>
</html>