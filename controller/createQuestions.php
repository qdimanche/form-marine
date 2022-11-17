<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['question']) {
    $question = $_POST['question'];
    $categoryId = $_POST['categories'];
    $stmt = $db->prepare("INSERT INTO questions (name, categoryID) VALUES ($question, $categoryId)");
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}
$query = "SELECT LAST_INSERT_ID()";
$lastId = $db->prepare($query);
try {
    $lastId->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$res = $lastId->fetchAll();
$lastIdQuestion = $res[0][0];

if ($_POST['response1'] && $_POST['baremeQuestion1']) {
    $response = $_POST['response1'];
    $value = $_POST['baremeQuestion1'];
    $insertAnswer1 = $db->prepare("INSERT INTO answer (name, questionID) VALUES ($response . " - " . $value, $lastIdQuestion)");
}
