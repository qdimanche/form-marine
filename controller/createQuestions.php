<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['question']) {
    $question = $_POST['question'];
    $categoryId = $_POST[''];
    $stmt = $db->prepare("INSERT INTO questions (name, categoryID) VALUES '$question'");
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}