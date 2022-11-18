<?php
require dirname(__DIR__).'/config/connect.php';
require 'getAllQuestions.php';
$nbQuestion = intval($res['nbQuestion']);
$min2 = $nbQuestion+1;
$max2 = $nbQuestion*2;
$min3 = ($nbQuestion*2)+1;
$max3 = ($nbQuestion*3);
$min4 = ($nbQuestion*3)+1;
$max4 = ($nbQuestion*4);
$query = "UPDATE `graduations` SET `min`='1',`max`='$nbQuestion' WHERE `graduationID`='1';";
$query .= "UPDATE `graduations` SET `min`='$min2',`max`='$max2' WHERE `graduationID`='2';";
$query .= "UPDATE `graduations` SET `min`='$min3',`max`='$max3' WHERE `graduationID`='3';";
$query .= "UPDATE `graduations` SET `min`='$min4',`max`='$max4' WHERE `graduationID`='4';";
$stmt = $db->prepare($query);
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
?>

  
