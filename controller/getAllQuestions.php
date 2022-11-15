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
    }
    var_dump($question);