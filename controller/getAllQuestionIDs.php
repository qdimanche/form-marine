<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from questions ";
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
//$categoryName = $data['name'];
var_dump($data);
$res = [];
$i = 0;
foreach ($data as $question) {
    $questionID     = $question['questionID'];
    $res[$i] = $questionID;
    $i++;
}
?>
