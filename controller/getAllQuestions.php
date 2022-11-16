<?php

require dirname(__DIR__).'/config/connect.php';

$stmt = $db->prepare("SELECT * FROM QUESTIONS");
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
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
    $res[$iteration]['answer1'] = $answersTab[1];
    $res[$iteration]['answer2'] = $answersTab[2];
    $res[$iteration]['answer3'] = $answersTab[3];
    $res[$iteration]['answer4'] = $answersTab[4];
}
$res['nbQuestion'] = $iteration;
