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

<div class="flex space-x-6 lg:mx-60 mx-20 min-h-screen items-center">
    <a href="resultsList.php.php" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-6 rounded-[10px] text-sm w-1/2 text-center">Résultats</a>
    <a href="questionsList.php" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-6 rounded-[10px] text-sm w-1/2 text-center">Questions</a>
    <a href="graduations.php" class="bg-[#3D5A80]/80 hover:bg-[#3D5A80] duration-300 text-white px-2 py-6 rounded-[10px] text-sm w-1/2 text-center">Appréciations</a>
</div>




</body>
</html>
