<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from categories";
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
$res = [];
$i = 0;
foreach ($data as $category) {
    $name = $category['name'];
    $id = $category['categoryID'];
    $res[$i] = ["id"=>$id,"name"=>$name];
    $i++;
}
?>
