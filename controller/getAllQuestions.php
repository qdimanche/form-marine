<?php

require 'connect.php';

$stmt = $db->prepare("SELECT * FROM QUESTIONS");
$stmt->execute();
$data = $stmt->fetchAll();
$iteration = 0;
$res = [];
foreach ($data as $question) {
    $iteration++;
    $questionID = $question['questionID'];
    $name = $question['name'];
    $category = $question['categoryID'];
    require 'getQuestionAnswers.php';
    $res[$iteration][0] = $questionID;
    //$res[$iteration][1] = resultat du controller GetCategory
    $res[$iteration][1] = $name;
    $res[$iteration][2] = $questionID;
    $res[$iteration][3] = $tabdesreponses[0];
    $res[$iteration][4] = $tabdesreponses[1];
    $res[$iteration][4] = $tabdesreponses[2];
    $res[$iteration][4] = $tabdesreponses[3];
    var_dump($res);

}
$res[0] = $iteration;
