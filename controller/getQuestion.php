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
    $res[$iteration]['questionID'] = $questionID;
    $res[$iteration]['name'] = $name;
    require 'getQuestionCategory.php';
    $res[$iteration]['categoryName'] = $categoryName;
    $res[$iteration]['categoryID'] = $categoryID;
    $res[$iteration]['answer1'] = $answersTab[0];
    $res[$iteration]['answer2'] = $answersTab[1];
    $res[$iteration]['answer3'] = $answersTab[2];
    $res[$iteration]['answer4'] = $answersTab[3];
