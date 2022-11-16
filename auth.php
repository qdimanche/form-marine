<?php
session_start();
require_once './controller/connect.php';
require_once './php-jwt/src/BeforeValidException.php';
require_once './php-jwt/src/ExpiredException.php';
require_once './php-jwt/src/SignatureInvalidException.php';
require_once './php-jwt/src/JWT.php';
require_once './php-jwt/src/Key.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$jwt = null;
if (isset($_COOKIE['JWT'])) {
    $jwt = trim($_COOKIE['JWT']);    
    $token = JWT::decode($jwt, new Key($key, 'HS256'));
    $token = (array) $token;
    if($token['isConnected'] == true) {
        $_SESSION['login'] = $token['login'];
        $id = $token['userID'];
        $statement = $db->prepare("SELECT * FROM users WHERE userID='$id'");
        $statement->execute();
        $result = count($statement->fetchAll());
        if($result == 0){
            $_SESSION['redirectStatus'] = "InvalidAccount";  
            header('Location: ./index.php');
            die();
        }
        $_SESSION['login'] = $token['login'];
        $_SESSION['id'] = $token['userID'];
    }                         
}else{
    $_SESSION['redirectStatus'] = "InvalidToken";  
    header('Location: ./index.php');
    die();
}

?>