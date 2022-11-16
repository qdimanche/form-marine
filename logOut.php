<?php session_start();
session_unset();

setcookie("JWT", $jwt, time() - 3600, "/", "localhost");

header("Location: ./index.php");
die();?>