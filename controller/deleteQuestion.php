<?php
require dirname(__DIR__).'/config/connect.php';
$questionId = $_POST['questionID'];

$query = "DELETE FROM `answers` WHERE questionID = '$questionId'; DELETE FROM questions WHERE questionID = '$questionId'; ";
$stmt = $db->prepare($query);
try {
    $stmt = $stmt->execute();
}
catch (PDOException $e) {
    echo 'Error : ' . $e->getMessage() . '<br/>';
}

header('Location: ../questionsList.php');