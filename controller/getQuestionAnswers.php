<?php

require dirname(__DIR__).'/config/connect.php';
$query = "Select * from answers WHERE questionID = " . $questionID;
//ECHO $query;
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll();
//var_dump($data);
$iterator = 0;
foreach ($data as $answer){
    $tabdesreponses[$iterator] = $answer['name'];
    $iterator++;
}
?>