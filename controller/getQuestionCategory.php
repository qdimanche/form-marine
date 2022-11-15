<?php
require '../config/connect.php';
$query = "Select * from categories WHERE categoryID = " . $categoryID;
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetch();
$categoryName = $data['name'];