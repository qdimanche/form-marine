<?php
require dirname(__DIR__).'/config/connect.php';
$questionId = $_POST['questionID'];
//var_dump($_POST);

$query = "DELETE FROM `answers` WHERE questionID = '$questionId'; DELETE FROM questions WHERE questionID = '$questionId'; ";
$stmt = $db->prepare($query);
var_dump($query);
try {
    $stmt = $stmt->execute();
}
catch (PDOException $e) {
    echo 'Error : ' . $e->getMessage() . '<br/>';
}