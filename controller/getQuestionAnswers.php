<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from answers WHERE questionID = " . $questionID;
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
<<<<<<< HEAD
=======

>>>>>>> 783c535999a21fc2c09fc813c26b1677c180520b
foreach ($data as $answer){
    $answersTab[$answer['value']] = $answer['name'];
    $answersTabValue[$answer['value']] = $answer['value'];
}
?>