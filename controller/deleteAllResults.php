<?php
require dirname(__DIR__).'/config/connect.php';
$questionId = $_POST['questionId'];
try {
    if ($query = $db->prepare("DELETE * FROM results")) {
        $query->bindParam(":id", $questionId);
        if ($query->execute()) {
            //header('Location: ../admin.php');
        }
    }
} catch (PDOException $e) {
    echo 'Error : ' . $e->getMessage() . '<br/>';
}
