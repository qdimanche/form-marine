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
    $res[$iteration]['answer1'] = $answersTab[0];
    $res[$iteration]['answer2'] = $answersTab[1];
    $res[$iteration]['answer3'] = $answersTab[2];
    $res[$iteration]['answer4'] = $answersTab[3];
}
$res['nbQuestion'] = $iteration;
