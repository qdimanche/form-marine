<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from categories ";
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
//$categoryName = $data['name'];
var_dump($data[0]['name']);
$res = [];
$i = 0;
foreach ($data as $category) {
    $name = $category['name'];
    $res[$i] = $name;
    $i++;
}
?>