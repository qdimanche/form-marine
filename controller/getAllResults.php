<?php

require dirname(__DIR__).'/config/connect.php';
$res = [];
$iterator = 0;
$stmt = $db->prepare("Select * from results");
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
foreach($data as $result){
    $res[$iterator] = $result['average'];
    $iterator++;
}
?>