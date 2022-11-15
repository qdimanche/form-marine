<?php
session_start();
require_once './controller/connect.php';
require_once './php-jwt/src/BeforeValidException.php';
require_once './php-jwt/src/ExpiredException.php';
require_once './php-jwt/src/SignatureInvalidException.php';
require_once './php-jwt/src/JWT.php';
use \Firebase\JWT\JWT;

// try {
//     $db = new PDO('mysql:host=localhost;dbname=form-marine', 'root', '');
//  } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
//  }

$statement = $db->prepare("SELECT * FROM users");
$statement->execute();
$result = $statement->fetchAll();
// $login='admin';
// $password= hash('md5','pass');
$pwd = hash('md5',$_POST['password']);
// $pwd = hash('md5','pass');
// $_POST['login']='admin';
foreach  ($result as $row) {
    if($row['login'] == $_POST['login'] && $row['password'] == $pwd){
        $token = array();
        $token['login'] = $row['login'];
        $token['userID'] = $row['userID'];
        $token['isConnected'] = true;
        $jwt = JWT::encode($token,'CESI','HS256');
        setcookie("JWT", $jwt, time()+3600, "/", "localhost");
        header("Location: ./index.php");
        die();
    }
}
$_SESSION['redirectStatus'] = "InvalidCredentials";  
header('Location: ./index.php');
die();
?>