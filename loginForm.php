<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<form action="createToken.php" method="post" class="space-y-6 flex flex-col min-h-screen mx-auto justify-center w-fit">
    <div class="flex flex-col space-y-2">
        <label for="login">Nom d'utilisateur</label>
        <input id="login" name="login" type="text" >
    </div>
    <div class="flex flex-col space-y-2">
        <label for="password">Mot de passe</label>
        <input id="password" name="password" type="password" class="">
    </div>
    <button type="submit" class="bg-[#293241]/80 duration-300 hover:bg-[#293241] text-white px-2 py-3 rounded-[10px] text-sm w-full">Se connecter</button>
</form>




</body>
</html>
