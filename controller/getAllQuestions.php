<?php

require dirname(__DIR__).'/config/connect.php';

$stmt = $db->prepare("SELECT * FROM QUESTIONS");
$stmt->execute();
$data = $stmt->fetchAll();
$iteration = 0;
$res = [];
foreach ($data as $question) {
    $iteration++;
    $questionID = $question['questionID'];
    $name = $question['name'];
    $categoryID = $question['categoryID'];
    require 'getQuestionAnswers.php';
    $res[$iteration]['questionID'] = $questionID;
    $res[$iteration]['name'] = $name;
    require 'getQuestionCategory.php';
    $res[$iteration]['categoryName'] = $categoryName;
    $res[$iteration]['answer1'] = $tabdesreponses[0];
    $res[$iteration]['answer2'] = $tabdesreponses[1];
    $res[$iteration]['answer3'] = $tabdesreponses[2];
    $res[$iteration]['answer4'] = $tabdesreponses[3];
}
$res[0] = $iteration;
