<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from answers WHERE questionID = " . $questionID;
//ECHO $query;
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
//var_dump($data);

foreach ($data as $answer){
    $answersTab[$answer['value']] = $answer['name'];
    $answersTabValue[$answer['value']] = $answer['value'];
}
?>
