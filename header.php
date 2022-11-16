<?php session_start(); ?>
<div class="absolute top-8 flex justify-between w-full px-8 items-center">
        <a href="index.php"><img src="assets/images/home.png" class="w-6" alt=""></a>
        <div class="space-x-2">
        <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']) {
            echo '<a href="admin.php" class="bg-[#EE6C4D]/80 duration-300 hover:bg-[#EE6C4D] text-white px-2 py-3 rounded-[10px] text-sm">Administration</a>';
            echo '<a href="logOut.php" class="bg-[#293241]/80 duration-300 hover:bg-[#293241] text-white px-2 py-3 rounded-[10px] text-sm">Se déconnecter</a>';
        }
        else{
            echo '<a href="loginForm.php" class="bg-[#293241]/80 duration-300 hover:bg-[#293241] text-white px-2 py-3 rounded-[10px] text-sm">Se connecter</a>';
        }
        ?>
            
        </div>
</div>