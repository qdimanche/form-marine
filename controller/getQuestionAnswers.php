<?php

require './connect.php';
$questionID = 1;
$query = "Select * from answers WHERE questionID = " . $questionID;
ECHO $query;
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll();
//var_dump($data);
foreach ($data as $answer){
    echo $answer;
    echo " ";
}
echo "";