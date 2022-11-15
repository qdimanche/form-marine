<?php

require 'connect.php';

$stmt = $db->prepare("SELECT * FROM QUESTIONS");
$stmt->execute();
$data = $stmt->fetchAll();
$iteration = 0;
foreach ($data as $question) {
    $iteration++;
    //$res[$iteration] = $question;
    //echo $question;
    }
    var_dump($question);