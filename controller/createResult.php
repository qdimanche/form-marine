<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['categoriesName']) {
    $name = $_POST['categoriesName'];
    $stmt = $db->prepare("INSERT INTO `results` (name) VALUES '$name'");
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
?>
