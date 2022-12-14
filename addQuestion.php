<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php require 'auth.php';
require 'header.php';?>

<form method="post" action="./controller/createQuestions.php" class="space-y-6 flex flex-col lg:mx-60 mx-20 pt-32 pb-16">
  <div class="flex space-x-4 pb-10 border-b border-slate-200">
    <div class="flex flex-col space-y-2 w-1/2">
      <label for="question">Écrire votre question</label>
      <input name="question" id="question" type="text" required>
    </div>
    <div class="flex flex-col space-y-2 relative w-1/2">
      <label for="categories">Sélectionner la catégorie</label>
        <select name="categories" id="categories">
            <?php
            require __DIR__.'/controller/getAllCategories.php';
            foreach ($res as $category): ?>
                <option value="<?php echo $category['id']  ?>"><?php echo $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>

  <div class="flex space-x-6 pt-4">
    <div class="flex flex-col space-y-2 w-3/4">
      <label for="response1">Écrire votre réponse 1</label>
      <input name="response1" id="response1" type="text" required>
    </div>
    <div class="flex flex-col space-y-2 relative w-1/4">
      <label for="baremeQuestion1">Nb points</label>
      <select name="bareme1" id="baremeQuestion1">
        <option selected value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>
  <div class="flex space-x-6">
    <div class="flex flex-col space-y-2 w-3/4">
      <label for="response2">Écrire votre réponse 2</label>
      <input name="response2" id="response2" type="text" required>
    </div>
    <div class="flex flex-col space-y-2 relative w-1/4">
      <label for="baremeQuestion2">Nb points</label>
      <select name="bareme2" id="baremeQuestion2">
        <option value="1">1</option>
        <option selected value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>
  <div class="flex space-x-6">
    <div class="flex flex-col space-y-2 w-3/4">
      <label for="response3">Écrire votre réponse 3</label>
      <input name="response3" id="response3" type="text" required>
    </div>
    <div class="flex flex-col space-y-2 relative w-1/4">
      <label for="baremeQuestion3">Nb points</label>
      <select name="bareme3" id="baremeQuestion3">
        <option value="1">1</option>
        <option value="2">2</option>
        <option selected value="3">3</option>
        <option value="4">4</option>
      </select>
      <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>
  <div class="flex space-x-6">
    <div class="flex flex-col space-y-2 w-3/4">
      <label for="repsonse4">Écrire votre réponse 4</label>
      <input name="response4" id="repsonse4" type="text" required>
    </div>
    <div class="flex flex-col space-y-2 relative w-1/4">
      <label for="baremeQuestion4">Nb points</label>
      <select name="bareme4" id="baremeQuestion4">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option selected value="4">4</option>
      </select>
      <img src="assets/images/icons8-chevron-96.png" alt="" class="absolute w-6 bottom-2 right-2 pointer-events-none">
    </div>
  </div>
  <div class="flex space-x-6 !mt-12">
    <a href="questionsList.php" class="bg-[#3D5A80]/60 hover:bg-[#3D5A80]/70 duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2 text-center">Retour</a>
      <button type="submit" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-3 rounded-[10px] text-sm w-1/2">Ajouter question</button>
  </div>
</form>





</body>
</html>
