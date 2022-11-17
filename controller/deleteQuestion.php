<?php
require dirname(__DIR__).'/config/connect.php';
$questionId = $_POST['questionID'];
try {
    if ($query = $db->prepare("DELETE FROM answers WHERE questionID = :id; DELETE FROM questions WHERE questionID = :id; ")) {
        $query->bindParam(":id", $questionId);
        if ($query->execute()) {
            header('Location: ../questionsList.php');
        }
    }
} catch (PDOException $e) {
    echo 'Error : ' . $e->getMessage() . '<br/>';
}