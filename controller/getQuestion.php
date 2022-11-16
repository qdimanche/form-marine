<?php

require dirname(__DIR__).'/config/connect.php';
$numQuestion = $_POST['numQuestion'];
$stmt = $db->prepare("SELECT * FROM QUESTIONS WHERE questionID = '$numQuestion'");
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$question = $stmt->fetch();
$res = [];

    $questionID = $question['questionID'];
    $name = $question['name'];
    $categoryID = $question['categoryID'];
    require 'getQuestionAnswers.php';
    $res['questionID'] = $questionID;
    $res['name'] = $name;
    require 'getQuestionCategory.php';
    $res['categoryName'] = $categoryName;
    $res['categoryID'] = $categoryID;
    $res['answer1'] = $answersTab[0];
    $res['answer2'] = $answersTab[1];
    $res['answer3'] = $answersTab[2];
    $res['answer4'] = $answersTab[3];
