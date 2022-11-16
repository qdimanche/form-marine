<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['question']) {
    $question = $_POST['question'];
    $categoryId = $_POST['categories'];
    $stmt = $db->prepare("INSERT INTO questions (name, categoryID) VALUES ('$question', '$categoryId')");
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}