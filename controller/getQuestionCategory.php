<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from categories WHERE categoryID = " . $categoryID;
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetch();
$categoryName = $data['name'];
?>