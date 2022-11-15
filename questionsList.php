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

<form action="" class="space-y-6 flex flex-col lg:mx-60 mx-20 pt-32 pb-16  ">
  <div class="flex space-x-4 pb-10 border-b border-slate-200">
    <div class="flex flex-col space-y-2 w-1/2">
      <label for="question">Modifier votre question</label>
      <input id="question" type="text" >
    </div>
    <div class="flex flex-col space-y-2 relative w-1/2">
      <label for="categories">Modifier la catégorie</label>
      <select name="categories" id="categories">
        <option value="categorie1">categorie1</option>
        <option value="categorie2">categorie2</option>
        <option value="categorie3">categorie3</option>
        <option value="categorie4">categorie4</option>
      </select>
      <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>

  <div class="flex space-x-6 pt-4 relative justify-between">
    <div class="flex flex-col space-y-2 w-4/5">
      <label for="response1">Modifier votre réponse 1</label>
      <input id="response1" type="text" >
    </div>
    <div class="flex w-1/5 items-center relative">
      <div class="flex w-fit">
        <div class="flex flex-col space-y-2 relative">
          <label for="baremeQuestion1">Nb points</label>
          <select name="categories" id="baremeQuestion1" class="w-full">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
        </div>
        <div class="">
          <img src="assets/images/icons8-multiply-96.png" class="w-4  cursor-pointer bottom-3 right-0 absolute" alt="">
        </div>

      </div>

    </div>
  </div>



  <div class="flex space-x-6 !mt-12">
    <button type="submit" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2">Modifier question</button>
    <a href="" class="bg-[#3D5A80]/60 hover:bg-[#3D5A80]/70 duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2 text-center">Ajouter une question</a>
  </div>
</form>





</body>
</html>